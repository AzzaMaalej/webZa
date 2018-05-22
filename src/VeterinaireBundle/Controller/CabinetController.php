<?php

namespace VeterinaireBundle\Controller;


use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use VeterinaireBundle\Entity\Cabinet;
use VeterinaireBundle\Entity\Calendrier;
use ZanimauxBundle\Entity\User;
use VeterinaireBundle\Form\CabinetType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CabinetController extends Controller
{
    public function afficherCabinetsFrontAction()
    {   $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $cabinets = $this->getDoctrine()
            ->getRepository(Cabinet::class)->findAll();

        return $this->render('VeterinaireBundle:Cabinet:afficherCabinetsFront.html.twig',['cabinets'=>$cabinets,'user'=>$user]);


    }
    public function afficheCabinetBackAction()

    {

        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $cabinet=new Cabinet();
        $cabinet->setCin($user);
        $idUser=$cabinet->getCin();
        $em=$this->getDoctrine()->getManager();
        $cabinets=$em->getRepository("VeterinaireBundle:Cabinet")->RechercheCabinet($idUser);


        return $this->render('VeterinaireBundle:Cabinet:afficheCabinetBack.html.twig',array('cabinets'=>$cabinets,'user'=>$user));


    }

    public function InformationsCabinetAction($immatriculecabinet)
    {
        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em=$this->getDoctrine()->getManager();
        $cabinet = $em->getRepository(Cabinet::class)->find($immatriculecabinet);
        $vet= new User();
        $em3=$this->getDoctrine()->getManager();
        $vet= $em3->getRepository(User::class)->find($cabinet->getCin());
        $em2=$this->getDoctrine()->getManager();
        $calendriers=$em2->getRepository(Calendrier::class)->findbyVet($vet->getId());

        return $this->render('VeterinaireBundle:Cabinet:InformationsCabinet.html.twig',
            array(
                'cabinet'=>$cabinet,
                'user'=>$user,
                'calendriers'=>$calendriers,
                'vet'=>$vet
            ));


    }

    public function addCabinetAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $idUser=$user->getId();
        $cabinetext = $em->getRepository("VeterinaireBundle:Cabinet")->RechercheCabinet($idUser);


        if(!$cabinetext){
            $cabinet = new Cabinet();
            if($request->isMethod('POST')) {
                $em = $this->getDoctrine()->getManager();
                $cabinet->setCin($user);
                $cabinet->setImmatriculecabinet($request->get('immatriculecabinet'));
                $cabinet->setEmailcabinet($request->get('emailcabinet'));
                $cabinet->setTelephonecabinet($request->get('telephonecabinet'));
                $cabinet->setFaxcabinet($request->get('faxcabinet'));
                $cabinet->setAdressecabinet($request->get('adressecabinet'));
                $cabinet->setVillecabinet($request->get('villecabinet'));
                $cabinet->setCodepostalecabinet($request->get('codepostalecabinet'));
                $cabinet->setPhotovet($request->get('photovet'));
                $em->persist($cabinet);
                $em->flush();
                return $this->redirectToRoute('afficheCabinetBack');


            }
            return $this->render('VeterinaireBundle:Cabinet:addCabinet.html.twig',['cabinet'=>$cabinet,'user'=>$user]);
        }
        return $this->render('VeterinaireBundle:Cabinet:updateCabinet.html.twig',['cabinet'=>$cabinetext,'user'=>$user]);

    }

    public function updateCabinetAction(Request $request,$immatriculecabinet)
    { $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();

        $cabinet = $em->getRepository(Cabinet::class)->find($immatriculecabinet);

        if($request->isMethod('POST')) {

            $cabinet->setEmailcabinet($request->get('emailcabinet'));
            $cabinet->setTelephonecabinet($request->get('telephonecabinet'));
            $cabinet->setFaxcabinet($request->get('faxcabinet'));
            $cabinet->setAdressecabinet($request->get('adressecabinet'));
            $cabinet->setVillecabinet($request->get('villecabinet'));
            $cabinet->setCodepostalecabinet($request->get('codepostalecabinet'));
            $cabinet->setPhotovet($request->get('photovet'));

            $em->persist($cabinet);
            $em->flush();
            return $this->redirectToRoute('afficheCabinetBack');
        }
        return $this->render('VeterinaireBundle:Cabinet:updateCabinet.html.twig',array('cabinet'=>$cabinet,'user'=>$user));

    }

    public function deleteCabinetAction($immatriculecabinet){
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em = $this->getDoctrine()->getManager();
        $cabinet=$em->getRepository(Cabinet::class)
            ->find($immatriculecabinet);
        $em->remove($cabinet);
        $em->flush();
        return $this->redirectToRoute('afficherCabinetsFront',['cabinet'=>$cabinet,'user'=>$user]);
    }





}


