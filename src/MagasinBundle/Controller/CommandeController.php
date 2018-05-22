<?php

namespace MagasinBundle\Controller;
use FOS\UserBundle\Model\UserInterface;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use MagasinBundle\Entity\Produit;
use Swift_Attachment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Validator\Constraints\DateTime;
use MagasinBundle\Entity\ContenuPanier;
use MagasinBundle\Entity\Magasin;
use MagasinBundle\Entity\Panier;

class CommandeController extends Controller
{
    public function afficheCommandeAction()
    {
        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em=$this->getDoctrine()->getManager();
        $panier=$em->getRepository(Panier::class)->findPanier($user);
        $cPanier2=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,1);
        $date=$em->getRepository(ContenuPanier::class)->findMinDateCommande($user);
        $cPanier=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,0);

        //j'ai créé un service pour pouvoir passer ma variable $test, qui compte le nombre de jour entre une date actuel et la date de passage de commande à mon script
        foreach ($date as $p)
        {   $date2=date_parse($p);
        }
        $jour=$date2['day'];
        $date=new \DateTime("now");
        $p=$date->format('Y-m-d');
        $date2=date_parse($p);
        $jour1=$date2['day'];
        if($jour1>=$jour)
        {
            $test=$jour1-$jour;
        }
        else
        {
            $test=(30-$jour)+$jour1;
        }
        //le service se trouve sous # Resources/config/services.yml
        //j'ai passer ce service à twig.globalspour rendre le service disponible dans toutes les vues
        $this->get('acme.js_vars')->chartData=$test;

        return $this->render('MagasinBundle:Commande:affiche_commande.html.twig',array(
            'cPanier'=>$cPanier,
            'user'=>$user,
            'panier'=>$panier,
            'test'=>$test,
            'cPanier2'=>$cPanier2
            // ...
        ));
    }

    public function passeCommandeAction()
    {
        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em=$this->getDoctrine()->getManager();
        $cPanier=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,0);
        $panier=$em->getRepository(Panier::class)->findPanier($user);
        $panier->setSommeCommande($panier->getSommeCommande()+$panier->getSomme());
        $panier->setSomme(0);
        $em->persist($panier);
        $em->flush();
        foreach ($cPanier as $p)

        {
            $prod=$em->getRepository(Produit::class)->selectIdMagasin($p->getIdProduit());
            $prod->setNbFoisVendu($prod->getNbFoisVendu()+$p->getQuantite());
            $p->setDateCommande(new \DateTime("now"));
            $p->setCommande(true);
            $em->persist($p);
            $em->flush();
        }
        $cPanier2=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,1);

         $n=rand(1, 1000);
          $file='facture'.$n.'.pdf';

           $this->get('knp_snappy.pdf')->generateFromHtml(
                $this->renderView(
                    'MagasinBundle:Commande:facture.html.twig',
                    array(
                        'cPanier'=>$cPanier2,
                        'panier'=>$panier
                    )
                ),
                $file
            );


           $message=\Swift_Message::newInstance()
                ->setSubject('Votre Commande Zanimaux')
                ->setFrom('zanimo.esprit@gmail.com')
                ->setTo($user->getEmail())
                ->setBody("commande")
               ->attach(Swift_Attachment::fromPath($file));

            $this->get('mailer')->send($message);
        return $this->render('MagasinBundle:Commande:affiche_commande.html.twig',array('cPanier2'=>$cPanier2,'panier'=>$panier,'user'=>$user));

    }

    public function suppCommandeAction()
    {
        $user=$this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $em=$this->getDoctrine()->getManager();
        $cPanier1=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,1) ;
        foreach ($cPanier1 as $p) {

            $em->remove($p);
            $em->flush();
        }
        $cPanier=$em->getRepository(ContenuPanier::class)->getProduitPanier($user,0) ;
        $panier=$em->getRepository(Panier::class)->findPanier($user);

        $magasins = $this->getDoctrine()
            ->getRepository(Magasin::class)->findAll();
        return $this->render('MagasinBundle:Magasin:afficheConnecté.html.twig',['magasins' => $magasins,'user'=>$user,'cPanier'=>$cPanier,'panier'=>$panier]);

    }


}
