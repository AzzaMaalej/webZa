<?php
/**
 * Created by PhpStorm.
 * User: PC09
 * Date: 2/18/2018
 * Time: 8:55 AM
 */

namespace VeterinaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use VeterinaireBundle\Entity\HWCalculator;
use MagasinBundle\Entity\ContenuPanier;
use MagasinBundle\Entity\Panier;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Model\UserInterface;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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


class HWCalculatorController extends Controller
{
    public function indexAction()

    {   $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('VeterinaireBundle:HWCalculator:Layout.html.twig',['user'=>$user]);


    }


    public function HWResultAction(Request $request){
        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $request->request->get('HWEntity');
        $HWEntity = new HWCalculator();
        $HWEntity->setNomAnimal($request->get('nom_animal'));
        $HWEntity->setPoidAnimal($request->get('poid_animal'));
        $HWEntity->setTypeAnimal($request->get('type_animal'));
        $HWEntity->setNiveauActivite($request->get('niveau_activite'));
        $HWEntity->setNeutered($request->get('neutered'));

        return $this->render('VeterinaireBundle:HWCalculator:HWResult.html.twig',['HWEntity'=>$HWEntity,'user'=>$user]);
    }

}