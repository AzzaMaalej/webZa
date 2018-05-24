<?php

namespace PetSitterDresseurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis")
 * @ORM\Entity(repositoryClass="PetSitterDresseurBundle\Repository\AvisRepository")
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="ZanimauxBundle\Entity\User")
     * @ORM\JoinColumn(name="cinUser",referencedColumnName="cin")
     */
    private $cinUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="idParc", type="integer", length=20, nullable=true)
     */
    private $idParc;



    /**
     * @var integer
     *
     * @ORM\Column(name="avis", type="integer", length=20, nullable=true)
     */
    private $avis;

    /**
     * Set avis
     *
     * @param integer $avis
     *
     * @return Avis
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return integer
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cinUser
     *
     * @param \ZanimauxBundle\Entity\User $cinUser
     *
     * @return Avis
     */
    public function setCinUser(\ZanimauxBundle\Entity\User $cinUser = null)
    {
        $this->cinUser = $cinUser;

        return $this;
    }

    /**
     * Get cinUser
     *
     * @return \ZanimauxBundle\Entity\User
     */
    public function getCinUser()
    {
        return $this->cinUser;
    }


    /**
     * Set idParc
     *
     * @param integer $idParc
     *
     * @return Avis
     */
    public function setIdParc($idParc)
    {
        $this->idParc = $idParc;

        return $this;
    }

    /**
     * Get idParc
     *
     * @return integer
     */
    public function getIdParc()
    {
        return $this->idParc;
    }
}
