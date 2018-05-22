<?php

namespace ZanimauxMobileBundle\Controller;

use MagasinBundle\Entity\Magasin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class MagasinController extends Controller
{
    public function afficheMagasinAction()
    {
        $magasins = $this->getDoctrine()
            ->getRepository(Magasin::class)->findAll();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted= $serializer->normalize($magasins);
        return new JsonResponse($formatted);
    }
}
