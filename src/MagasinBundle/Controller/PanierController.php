<?php

namespace MagasinBundle\Controller;

use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MagasinBundle\Entity\ContenuPanier;
use MagasinBundle\Entity\Panier;
use MagasinBundle\Entity\Produit;
use MagasinBundle\Entity\Magasin;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class PanierController extends Controller
{
    public function ajouterProduitPanierAction($idProduit,$prix)
    {
        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em=$this->getDoctrine()->getManager();
        $cp=new ContenuPanier();
        $panier=new Panier();
        $panier2=new Panier();
        $panier2->setCin($user);
        $panier1=$em->getRepository(Panier::class)->findPanier($panier2->getCin() );

        $cp->setCommande(false);
        //on teste si le client a deja ajouter un produit au panier, donc on maj juste la somme de ses achats
        if (!empty($panier1) )
        {
            $panier1->setSomme($panier1->getSomme() +$prix);
            $em->persist($panier1);
            $em->flush();
            $cp->setCin($panier1);
        }
        else
        {
            $panier->setCin($user);
            $panier->setSomme($prix);
            $em->persist($panier);
            $em->flush();
            $cp->setCin($panier);
        }
        //on teste si le client a deja ajouter le produit X au panier, donc on MAJ juste la quantité
        $produit= $em->getRepository(ContenuPanier::class)->findProduit($idProduit,$panier2->getCin());
        if(!empty($produit))
        {
            $produit->setQuantite($produit->getQuantite()+1 );
            $produit->setCommande(false);
            $em->persist($produit);
            $em->flush();
        }
        else
        {
            $produit=$em->getRepository(Produit::class)->selectIdMagasin($idProduit);
            $cp->setQuantite(1);
            $cp->setIdProduit($produit);
            $em->persist($cp);
            $em->flush();
        }
        $produit=$em->getRepository(Produit::class)->selectIdMagasin($idProduit);
        $produit->setQuantite($produit->getQuantite()-1);
        $em->persist($produit);
        $em->flush();
            $var=$produit->getIdMagasin();
            $var2=$var->getIdMagasin();
        return $this->redirectToRoute('afficheProduit_m', array('idMagasin' => $var2)) ;
            // ...
    }

    public function modifPanierAction(Request $request,$idContenuPanier)
    {
        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em = $this->getDoctrine()->getManager();
        $cPanier1 = $em->getRepository(ContenuPanier::class)->find($idContenuPanier);
        $panier1=$em->getRepository(Panier::class)->find($cPanier1->getCin());
        $produit=$em->getRepository(Produit::class)->find($cPanier1->getIdProduit());
        if($request->isMethod('POST')) {
            $cPanier1->setQuantite($request->get('quantite'));
            $panier1->setSomme($panier1->getSomme()+$request->get('quantite')*$produit->getPrix());
            $produit->setQuantite($produit->getQuantite()-($request->get('quantite')));

            $em->persist($cPanier1);
            $em->persist($panier1);
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('affichePanier');


        }
        $cPanier = $em->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$em->getRepository(Panier::class)->find($user);
        if(empty($panier))
        {
            $panier=new Panier();
            $panier->setSomme(0);
        }

        return $this->render('MagasinBundle:Panier:modif_panier.html.twig',['idContenuPanier'=>$idContenuPanier,'cPanier'=>$cPanier,'panier'=>$panier,'user'=>$user]) ;


    }


    public function supprimerProduitPanierAction($idContenuPanier,$prix,$quantite)
    {

        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $panier=new Panier();
        $panier->setCin($user);
        $em = $this->getDoctrine()->getManager();
        $em1 = $this->getDoctrine()->getManager();

        $cProduit= $em->getRepository(ContenuPanier::class)->getProduitContenuPanier($idContenuPanier) ;
        $produit= $em1->getRepository(Produit::class)->selectIdMagasin($cProduit->getIdProduit());
        $produit->setQuantite($produit->getQuantite()+$quantite);
        $em1->persist($produit);
        $em1->flush();
        $em->remove($cProduit);
        $em->flush();
        $panier1=$em->getRepository(Panier::class)->findPanier($panier->getCin() );
        $panier1->setSomme($panier1->getSomme() -($prix*$quantite));
        $em->persist($panier1);
        $em->flush();
        $var=$produit->getIdMagasin();
        $var2=$var->getIdMagasin();
        return $this->redirectToRoute('afficheProduit_m', array('idMagasin' => $var2)) ;
    }


    public function affichePanierAction()
    {
        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
        throw new AccessDeniedException('This user does not have access to this section.');
        }

        $em=$this->getDoctrine()->getManager();
        $cPanier=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$em->getRepository(Panier::class)->findPanier($user);
        if(empty($panier))
        {
            $panier=new Panier();
            $panier->setSomme(0);
        }


        return $this->render('MagasinBundle:Panier:affiche_panier.html.twig',array('cPanier'=>$cPanier,'panier'=>$panier,'user'=>$user));


    }

}
