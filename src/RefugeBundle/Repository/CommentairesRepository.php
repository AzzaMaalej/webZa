<?php

namespace RefugeBundle\Repository;

/**
 * CommentairesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentairesRepository extends \Doctrine\ORM\EntityRepository
{
    public function rechercheCommentairesImmatriculationDQL($refuge){
        $q=$this->getEntityManager()
            ->createQuery("select a from RefugeBundle:Commentaires a
                               WHERE a.refuge=:refuge  ")
            ->setParameter('refuge',$refuge);
        return $q->getResult();}
}
