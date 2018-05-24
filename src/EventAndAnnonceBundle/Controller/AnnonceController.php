<?php

namespace EventAndAnnonceBundle\Controller;


use FOS\UserBundle\Model\UserInterface;
use MagasinBundle\Entity\ContenuPanier;
use MagasinBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use EventAndAnnonceBundle\Entity\Annonce;
use EventAndAnnonceBundle\Entity\AnnonceFavoris;
use EventAndAnnonceBundle\Form\AnnonceType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AnnonceController extends Controller
{
    //Ajouter une annonce

    public function ajouterAction(Request $request)
    { $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em = $this->getDoctrine()->getManager();
        $cPanier=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$em->getRepository(Panier::class)->findPanier($user);


        $annonce = new Annonce();
        $user = $this->getUser();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $annonce->setCin($user->getId());
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()) {
            $annonce = $form->getData();
           /*  $file = $annonce->getPieceJointe();
             $fileName = md5(uniqid()) . '.' .$file->guessExtension();
             $path ="../web";
             $file->move(
                 $path,
                 $fileName
             );*/
            $em = $this->getDoctrine()->getManager();
          // $annonce->setPieceJointe($fileName);
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('consulter_a');
        }
        return $this->render('EventAndAnnonceBundle:Annonce:ajouter.html.twig', array(
            'user'=>$user,
            'cPanier'=>$cPanier,
            'panier'=>$panier,
            'form' => $form->createView()));

    }

    //Mise à jour annonce

    public function ModifierAction(Request $request, $idAnnonce)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $annonce=$em->getRepository(Annonce::class)->find($idAnnonce);
        $form=$this->createFormBuilder($annonce)
            ->add('titre', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('type', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('description', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('pieceJointe', FileType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))
            ->getForm();
        $form->handleRequest($request);
        $el=$this->getDoctrine()->getManager();
        $cPanier=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$em->getRepository(Panier::class)->findPanier($user);
        if($form->isSubmitted()&&$form->isValid() ){
            $annonce = $form->getData();
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('consulter_a');

        }

        return $this->render('EventAndAnnonceBundle:Annonce:modifier.html.twig',[
            'user'=>$user,
            'annonce'=>$annonce,
            'cPanier'=>$cPanier,
            'panier'=>$panier,
            'form'=>$form->createView()]

        );
    }

    //Supprimer annonce

    public function SupprimerAction($idAnnonce){

        $em = $this->getDoctrine()->getManager();
        $annonce=$em->getRepository(Annonce::class)
            ->find($idAnnonce);
        $em->remove($annonce);
        $em->flush();
        return $this->redirectToRoute('consulter_a',['annonce'=>$annonce]);
    }

    //Consulter la liste des annonces

    public function ConsulterAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $annonces = $this->getDoctrine()
            ->getRepository(Annonce::class)
            ->findAll();
       $paginator =$this->get('knp_paginator');
        $result=$paginator->paginate(
            $annonces,
            $request->query->getInt('page',2),
            $request->query->getInt('limit',2)
        );
        //lehné on va récupérer la liste des annonces favoris de l'utilisateur connecté
        $em = $this->getDoctrine()->getManager();
        $cPanier=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$em->getRepository(Panier::class)->findPanier($user);
        $favoris = $this->getDoctrine()
            ->getRepository(AnnonceFavoris::class)
            ->findBy(array('cin'=>$user->getId()));


        return $this->render('EventAndAnnonceBundle:Annonce:consulterAnnonce.html.twig',[
            'user' => $user,
            'annonces'=>$result,
            'favoris'=>$favoris,
            'cPanier'=>$cPanier,
            'panier'=>$panier]);
    }

    public function addAnnonceAdminAction(Request $request){
        $annonces =new Annonce();
        $user=$this->getUser();

        if($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $annonces->setCin($user) ;

            $annonces->setTitre($request->get('type'));
            $annonces->setType($request->get('date'));
            $annonces->setDescription($request->get('description'));
            $annonces->setPieceJointe($request->get('photoanimal'));
            $em->persist($annonces);
            $em->flush();
            return $this->redirectToRoute('afficherAnnonceAdmin',['annonces'=>$annonces]);

        }
        return $this->render('EventAndAnnonceBundle:Annonce:addAnnoncesDashboard.html.twig');
    }

    public function afficherAnnoncetAdminAction()
    {   $user=$this->getUser();
        $annonces =new Annonce();
        $annonces = $this->getDoctrine()
            ->getRepository(Annonce::class)
            ->findAll();

        return $this->render('EventAndAnnonceBundle:Annonce:afficherAnnonceDash.html.twig',array('annonces'=>$annonces));


    }

    public function supprimerAnnonceAdminAction($idAnnonce)
    {
        $em = $this->getDoctrine()->getManager();
        $annonces=$em->getRepository(Annonce::class)
            ->find($idAnnonce);
        $em->remove($annonces);
        $em->flush();
        return $this->redirectToRoute('afficherAnnonceAdmin');

    }

    public function modifierAnnonceAdminAction(Request $request,$idAnnonce)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(Annonce::class)->find($idAnnonce);
        $user=$this->getUser();

        if($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $annonce->setTitre($request->get('titre'));
            $annonce->setType($request->get('type'));
            $annonce->setDescription($request->get('description'));
            $annonce->setPieceJointe($request->get('piecejointe'));
            $em->persist($annonce);
            $em->flush();
            return $this->redirectToRoute('afficherAnnonceAdmin');

        }
        return $this->render('EventAndAnnonceBundle:Annonce:modifierAnnonceAdmin.html.twig',['annonce'=>$annonce]);

    }

    public function rechercherAnnAction(Request $request){
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em=$this->getDoctrine()->getManager();
        $ann=$request->get('ann');
        $annonces = $em->getRepository('EventAndAnnonceBundle:Annonce')->rechercherAnnonceByTitre($ann);


        return $this->render('EventAndAnnonceBundle:Annonce:consulterAnnonce.html.twig',array(
            'annonces'=>$annonces,
            'user' => $user,
        ));
    }


}
