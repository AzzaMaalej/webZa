<?php

namespace EventAndAnnonceBundle\Controller;

use Doctrine\ORM\Mapping\Id;
use FOS\UserBundle\Model\UserInterface;
use MagasinBundle\Entity\ContenuPanier;
use MagasinBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use EventAndAnnonceBundle\Entity\Evenement;
use EventAndAnnonceBundle\Entity\Participation;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use ZanimauxBundle\Entity\User;
use EventAndAnnonceBundle\Form\EvenementType;

class EvenementController extends Controller
{
    //Ajouter un evenement

    public function addAction(Request $request)
    {   $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $evenement->setCin($user->getId());
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted()) {
            $evenement = $form->getData();
            //lehné bch naamlou comme une date repére chnajmou nehsbou biha différence
            $diff = date_diff ($evenement->getDateDebut(),new \DateTime('2018-01-01'),false);
            $diff2 = date_diff ($evenement->getDateFin(),new \DateTime('2018-01-01'),false);
            $diff3 = date_diff (new \DateTime(),new \DateTime('2018-01-01'),false);
            $res=(integer)$diff3->days - (integer)$diff->days;
            $res2=(integer)$diff2->days-(integer)$diff->days;
            if ($res>=0){$this->get('session')->getFlashBag()->add('error',"Date invalide: Un évenement doit étre créer avant au moin d'un jour");}
            elseif ($res2<0){$this->get('session')->getFlashBag()->add('error',"Date invalide: Date incohérente ");}
            else{

                $file = $evenement->getImageEvt();
                $fileName = md5(uniqid()) . '.' .$file->guessExtension();
                $path ="../web";
                $file->move(
                    $path,
                    $fileName
                );

                $em = $this->getDoctrine()->getManager();
                $evenement->setImageEvt($fileName);
                $em->persist($evenement);
                $em->flush();
                return $this->redirectToRoute('read_e');
            }}
        $el = $this->getDoctrine()->getManager();
        $cPanier=$el->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$el->getRepository(Panier::class)->findPanier($user);

        return $this->render('EventAndAnnonceBundle:Evenement:add.html.twig', [
            'user' => $user,
            'cPanier'=>$cPanier,
            'panier'=>$panier,
            'form' => $form->createView()]);

    }


    /* public function addAction(Request $request )
     {       $evenement=new Evenement();
         $user=$this->getUser();

         if($request->isMethod('POST')) {
             $em = $this->getDoctrine()->getManager();
             $evenement->setCin($user) ;
             $evenement->setTitre($request->get('titre'));
             $evenement->setType($request->get('type'));
             $evenement->setLieu($request->get('lieu'));
             $evenement->setDatedebut($request->get('datedebut'));
             $evenement->setDatefin($request->get('datefin'));
             $evenement->setDescription($request->get('description'));
             $evenement->setImageEvt($request->get('imageEvt'));
             $em->persist($evenement);
             $em->flush();
             return $this->redirectToRoute('add_e');

         }
         return $this->render('ZanimauxBundle:Evenement:add.html.twig');}*/


        //Afficher la liste des evenements

    public function readAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $cPanier=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$em->getRepository(Panier::class)->findPanier($user);



        $evenements = $this->getDoctrine()
            ->getRepository(Evenement::class)
            ->findAll();
       /* $paginator =$this->get('knp_paginator');
        $result=$paginator->paginate(
            $evenements,
            $request->query->getInt('page',2),
            $request->query->getInt('limit',2)
        );*/
              return $this->render('EventAndAnnonceBundle:Evenement:read.html.twig',[
            'user' => $user,
            'evenements'=>$evenements,
              'cPanier'=>$cPanier,
               'panier'=>$panier]

        );

    }
    public function detailsAction($idEvt)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em=$this->getDoctrine()->getManager();
        $evenement = $this->getDoctrine()
            ->getRepository(Evenement::class)
            ->findBy(array('idEvt'=>$idEvt))[0];
        /* $participer=$em->getRepository(Participation::class)->exist($user->getId(),$idEvt);*/
        //tester si l'utilisateur a déjà participer dans un événement préçis
        $participer = $this->getDoctrine()
            ->getRepository(Participation::class)
            ->findOneBy(array('idEvt'=>$idEvt,'cin'=>$user->getId()));
        $el=$this->getDoctrine()->getManager();
        $cPanier=$el->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$el->getRepository(Panier::class)->findPanier($user);


        //le test de nombre de place et nb participants
        $verif=0;
        if ($evenement->getNbPlace()<=$evenement->getNbParticipants()){
            $verif=1;
        }

        return $this->render('EventAndAnnonceBundle:Evenement:details.html.twig',[
            'user' => $user,
            'evenement'=>$evenement,
            'participer'=>$participer,
            'verif'=>$verif,
            'cPanier'=>$cPanier,
            'panier'=>$panier]);

    }
    //Mise à jour evenement

    public function updateAction($idEvt, Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            $this->render("ZanimauxBundle:User:accessDenied.html.twig");
        }

        $em = $this->getDoctrine()->getManager();
        $evenement=$em->getRepository(Evenement::class)->find($idEvt);
        $form=$this->createFormBuilder($evenement)
            ->add('lieu', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('titre', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('datedebut', DateType::class, array('widget'=>'single_text','attr' => array('class' => 'form-control')))
            ->add('datefin', DateType::class, array('widget'=>'single_text','attr' => array('class' => 'form-control')))
            ->add('description', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('nbplace', NumberType::class, array('attr' => array('class' => 'form-control')))
            ->add('imageEvt',FileType::class,(array('data_class' => null,'required' => false))

            )
            ->getForm();
       $el= $this->getDoctrine()->getManager();
        $cPanier=$el->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$el->getRepository(Panier::class)->findPanier($user);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid() ){
            $evenement = $form->getData();
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute('read_e');

        }

        return $this->render('EventAndAnnonceBundle:Evenement:update.html.twig', [
            'user'=>$user,
            'evenement'=>$evenement,
            'cPanier'=>$cPanier,
            'panier'=>$panier,
            'form'=>$form->createView()]

       );
    }

    //Supprimer un evenement

    public function deleteAction($idEvt){

        $em = $this->getDoctrine()->getManager();
        $evenement=$em->getRepository("EventAndAnnonceBundle:Evenement")
            ->find($idEvt);
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('read_e',['evenement'=>$evenement]);

    }

    public function rechercherAction(Request $request){
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $el = $this->getDoctrine()->getManager();
        $cPanier=$el->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$el->getRepository(Panier::class)->findPanier($user);

        $em=$this->getDoctrine()->getManager();
      $motcle=$request->get('motcle');
        $evenements = $em->getRepository('EventAndAnnonceBundle:Evenement')->rechercherEvenementByTitre($motcle);

        return $this->render('EventAndAnnonceBundle:Evenement:read.html.twig',[
                        'evenements'=>$evenements,
                        'user' => $user,
                          'cPanier'=>$cPanier ,
                            'panier'=>$panier]
        );
    }

    public function addAdminAction(Request $request){
            $evenements=new Evenement();
            $user=$this->getUser();

            if($request->isMethod('POST')) {
                $em = $this->getDoctrine()->getManager();
                $evenements->setCin($user) ;

                $evenements->settitre($request->get('titre'));
                $evenements->setType($request->get('type'));
                $evenements->setLieu($request->get('lieu'));
                $evenements->setDatedebut($request->get('datedebut'));
                $evenements->setDatefin($request->get('datefin'));
                $evenements->setDescription($request->get('description'));
                $evenements->setImageEvt($request->get('ImageEvt'));
                $em->persist($evenements);
                $em->flush();
                return $this->redirectToRoute('afficheAdmin',['evenements'=>$evenements]);

            }
            return $this->render('EventAndAnnonceBundle:Evenement:addEventDashboard.html.twig');
        }

    public function afficherEventAdminAction()
    {   $user=$this->getUser();
        $evenements =new Evenement();
        $evenements = $this->getDoctrine()
            ->getRepository(Evenement::class)
            ->findAll();

        return $this->render('EventAndAnnonceBundle:Evenement:afficherEventAdmin.html.twig',array('evenements'=>$evenements));


    }

    public function supprimerEventAdminAction($idEvt)
    {
        $em = $this->getDoctrine()->getManager();
        $evenement=$em->getRepository(Evenement::class)
            ->find($idEvt);
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('afficheAdmin');

    }

    public function modifierAdminAction(Request $request,$idEvt)
    {
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository(Evenement::class)->find($idEvt);
        $user=$this->getUser();

        if($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();
            $evenement->setCin($user) ;
            $evenement->setTitre($request->get('titre'));
            $evenement->setType($request->get('type'));
            $evenement->setLieu($request->get('lieu'));
            $evenement->setDatedebut($request->get('datedebut'));
            $evenement->setDatefin($request->get('datefin'));
            $evenement->setDescription($request->get('description'));
            $evenement->setImageEvt($request->get('imageEvt'));
            $em->persist($evenement);
            $em->flush();
            return $this->redirectToRoute('afficheAdmin');

        }
        return $this->render('EventAndAnnonceBundle:Evenement:modifierAdmin.html.twig',['evenement'=>$evenement]);

    }
}



