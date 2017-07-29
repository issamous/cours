<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classement
 *
 * @ORM\Table(name="classement")
 * @ORM\Entity
 */
class Classement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="classement_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $classementId;

    /**
     * @var string
     *
     * @ORM\Column(name="classement_equipe", type="string", length=255, nullable=true)
     */
    private $classementEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="classement_image_file", type="string", length=255, nullable=true)
     */
    private $classementImageFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="classement_points", type="integer", nullable=true)
     */
    private $classementPoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="classement_rang", type="integer", nullable=true)
     */
    private $classementRang;

    /**
     * @var integer
     *
     * @ORM\Column(name="classement_myteam", type="integer", nullable=true)
     */
    private $classementMyteam;

    /**
     * @var integer
     *
     * @ORM\Column(name="_isdeleted", type="integer", nullable=true)
     */
    private $isdeleted;



    /**
     * Get classementId
     *
     * @return integer
     */
    public function getClassementId()
    {
        return $this->classementId;
    }

    /**
     * Set classementEquipe
     *
     * @param string $classementEquipe
     *
     * @return Classement
     */
    public function setClassementEquipe($classementEquipe)
    {
        $this->classementEquipe = $classementEquipe;

        return $this;
    }

    /**
     * Get classementEquipe
     *
     * @return string
     */
    public function getClassementEquipe()
    {
        return $this->classementEquipe;
    }

    /**
     * Set classementImageFile
     *
     * @param string $classementImageFile
     *
     * @return Classement
     */
    public function setClassementImageFile($classementImageFile)
    {
        $this->classementImageFile = $classementImageFile;

        return $this;
    }

    /**
     * Get classementImageFile
     *
     * @return string
     */
    public function getClassementImageFile()
    {
        return $this->classementImageFile;
    }

    /**
     * Set classementPoints
     *
     * @param integer $classementPoints
     *
     * @return Classement
     */
    public function setClassementPoints($classementPoints)
    {
        $this->classementPoints = $classementPoints;

        return $this;
    }

    /**
     * Get classementPoints
     *
     * @return integer
     */
    public function getClassementPoints()
    {
        return $this->classementPoints;
    }

    /**
     * Set classementRang
     *
     * @param integer $classementRang
     *
     * @return Classement
     */
    public function setClassementRang($classementRang)
    {
        $this->classementRang = $classementRang;

        return $this;
    }

    /**
     * Get classementRang
     *
     * @return integer
     */
    public function getClassementRang()
    {
        return $this->classementRang;
    }

    /**
     * Set classementMyteam
     *
     * @param integer $classementMyteam
     *
     * @return Classement
     */
    public function setClassementMyteam($classementMyteam)
    {
        $this->classementMyteam = $classementMyteam;

        return $this;
    }

    /**
     * Get classementMyteam
     *
     * @return integer
     */
    public function getClassementMyteam()
    {
        return $this->classementMyteam;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return Classement
     */
    public function setIsdeleted($isdeleted)
    {
        $this->isdeleted = $isdeleted;

        return $this;
    }

    /**
     * Get isdeleted
     *
     * @return integer
     */
    public function getIsdeleted()
    {
        return $this->isdeleted;
    }
}
