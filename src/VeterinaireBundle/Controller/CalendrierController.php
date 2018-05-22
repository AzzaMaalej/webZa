<?php

namespace VeterinaireBundle\Controller;

use DateTime;
use Doctrine\ORM\OptimisticLockException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use VeterinaireBundle\Entity\Calendrier;
use VeterinaireBundle\Form\CalendrierType;

class CalendrierController extends Controller
{

    public function afficheDispoDashAction()
    {   $user=$this->getUser();

        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $calendrier=new Calendrier();
        $calendrier->setCin($user);
        $idUser=$calendrier->getCin();
        $em=$this->getDoctrine()->getManager();
        $calendriervet=$em->getRepository(Calendrier::class)->FindByVet($idUser);

        $notifiableRepo = $em->getRepository('MgiletNotificationBundle:NotifiableNotification')->findAll();

        return $this->render('VeterinaireBundle:Calendrier:afficheDispoDash.html.twig',array(
            'calendriervet'=>$calendriervet,
            'notification'=>$notifiableRepo,
            'user'=>$user
        ));


    }




    public function ajouterDispoAction(Request $request)
    {
        $user = $this->getUser();

        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em = $this->getDoctrine()->getManager();
        if($request->isMethod("post")) {
            $calendrier = new Calendrier();
            $calendrier->setCin($user);
            $time = strtotime($request->get('date_debut'));
            $newformat = date('Y-m-d h:m A', $time);
            $calendrier->setDateDebut(new DateTime($newformat));

            $time = strtotime($request->get('date_fin'));
            $newformat = date('Y-m-d h:m A', $time);
            $calendrier->setDateFin(new DateTime($newformat));
            $em->persist($calendrier);
            $manager = $this->get('mgilet.notification');
            $notif = $manager->createNotification(' Disponibilité Notification !');
            $notif->setMessage("une disponibilité a été ajouté.");



            try {
                $manager->addNotification(array($calendrier), $notif, true);
                $em->flush();
            } catch (OptimisticLockException $exception) {

            }
            return $this->redirectToRoute('afficheDispoDash');
        }
        return $this->render('VeterinaireBundle:Calendrier:ajouterDispo.html.twig',['user'=>$user]);}



    public function deleteDispoAction($id){
        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em = $this->getDoctrine()->getManager();
        $calendrier=$em->getRepository(Calendrier::class)
            ->find($id);
        $em->remove($calendrier);

        $manager = $this->get('mgilet.notification');
        $notif = $manager->createNotification(' Disponibilité Notification !');
        $notif->setMessage("la disponibilité a été annulé.");



        try {
            $manager->addNotification(array($calendrier), $notif, true);
            $em->flush();
        } catch (OptimisticLockException $exception) {


        }
        $em->flush();
        return $this->redirectToRoute('afficheDispoDash');

    }



}
