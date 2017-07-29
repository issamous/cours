<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="equipe_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $equipeId;

    /**
     * @var string
     *
     * @ORM\Column(name="equipe_nom", type="string", length=255, nullable=false)
     */
    private $equipeNom;

    /**
     * @var string
     *
     * @ORM\Column(name="equipe_sug", type="string", length=255, nullable=false)
     */
    private $equipeSug;

    /**
     * @var string
     *
     * @ORM\Column(name="equipe_image_file", type="string", length=255, nullable=false)
     */
    private $equipeImageFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="_isdeleted", type="integer", nullable=false)
     */
    private $isdeleted;



    /**
     * Get equipeId
     *
     * @return integer
     */
    public function getEquipeId()
    {
        return $this->equipeId;
    }

    /**
     * Set equipeNom
     *
     * @param string $equipeNom
     *
     * @return Equipe
     */
    public function setEquipeNom($equipeNom)
    {
        $this->equipeNom = $equipeNom;

        return $this;
    }

    /**
     * Get equipeNom
     *
     * @return string
     */
    public function getEquipeNom()
    {
        return $this->equipeNom;
    }

    /**
     * Set equipeSug
     *
     * @param string $equipeSug
     *
     * @return Equipe
     */
    public function setEquipeSug($equipeSug)
    {
        $this->equipeSug = $equipeSug;

        return $this;
    }

    /**
     * Get equipeSug
     *
     * @return string
     */
    public function getEquipeSug()
    {
        return $this->equipeSug;
    }

    /**
     * Set equipeImageFile
     *
     * @param string $equipeImageFile
     *
     * @return Equipe
     */
    public function setEquipeImageFile($equipeImageFile)
    {
        $this->equipeImageFile = $equipeImageFile;

        return $this;
    }

    /**
     * Get equipeImageFile
     *
     * @return string
     */
    public function getEquipeImageFile()
    {
        return $this->equipeImageFile;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return Equipe
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
