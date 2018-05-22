<?php
/**
 * Created by PhpStorm.
 * User: Maroua
 * Date: 28/02/2018
 * Time: 08:55
 */

namespace EventAndAnnonceBundle\Repository;


class AnnonceRepository extends \Doctrine\ORM\EntityRepository
{
    public function rechercherAnnonceByTitre($ann){
        $query= $this->createQueryBuilder('e')
            ->where('e.titre like :titre')->orWhere('e.type like :type')
            ->setParameter('titre',$ann.'%')
            ->orderBy('e.titre','ASC')->getQuery();

        return $query->getResult();

    }

}