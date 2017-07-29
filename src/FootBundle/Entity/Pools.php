<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pools
 *
 * @ORM\Table(name="pools")
 * @ORM\Entity
 */
class Pools
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pools_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $poolsId;

    /**
     * @var string
     *
     * @ORM\Column(name="pools_question_fr", type="string", length=255, nullable=true)
     */
    private $poolsQuestionFr;

    /**
     * @var string
     *
     * @ORM\Column(name="pools_question_ar", type="string", length=255, nullable=true)
     */
    private $poolsQuestionAr;

    /**
     * @var string
     *
     * @ORM\Column(name="pools_image_file", type="string", length=255, nullable=true)
     */
    private $poolsImageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="pools_start_date", type="string", length=255, nullable=true)
     */
    private $poolsStartDate;

    /**
     * @var string
     *
     * @ORM\Column(name="pools_end_date", type="string", length=255, nullable=true)
     */
    private $poolsEndDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="_published", type="integer", nullable=true)
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="_isdeleted", type="integer", nullable=true)
     */
    private $isdeleted;



    /**
     * Get poolsId
     *
     * @return integer
     */
    public function getPoolsId()
    {
        return $this->poolsId;
    }

    /**
     * Set poolsQuestionFr
     *
     * @param string $poolsQuestionFr
     *
     * @return Pools
     */
    public function setPoolsQuestionFr($poolsQuestionFr)
    {
        $this->poolsQuestionFr = $poolsQuestionFr;

        return $this;
    }

    /**
     * Get poolsQuestionFr
     *
     * @return string
     */
    public function getPoolsQuestionFr()
    {
        return $this->poolsQuestionFr;
    }

    /**
     * Set poolsQuestionAr
     *
     * @param string $poolsQuestionAr
     *
     * @return Pools
     */
    public function setPoolsQuestionAr($poolsQuestionAr)
    {
        $this->poolsQuestionAr = $poolsQuestionAr;

        return $this;
    }

    /**
     * Get poolsQuestionAr
     *
     * @return string
     */
    public function getPoolsQuestionAr()
    {
        return $this->poolsQuestionAr;
    }

    /**
     * Set poolsImageFile
     *
     * @param string $poolsImageFile
     *
     * @return Pools
     */
    public function setPoolsImageFile($poolsImageFile)
    {
        $this->poolsImageFile = $poolsImageFile;

        return $this;
    }

    /**
     * Get poolsImageFile
     *
     * @return string
     */
    public function getPoolsImageFile()
    {
        return $this->poolsImageFile;
    }

    /**
     * Set poolsStartDate
     *
     * @param string $poolsStartDate
     *
     * @return Pools
     */
    public function setPoolsStartDate($poolsStartDate)
    {
        $this->poolsStartDate = $poolsStartDate;

        return $this;
    }

    /**
     * Get poolsStartDate
     *
     * @return string
     */
    public function getPoolsStartDate()
    {
        return $this->poolsStartDate;
    }

    /**
     * Set poolsEndDate
     *
     * @param string $poolsEndDate
     *
     * @return Pools
     */
    public function setPoolsEndDate($poolsEndDate)
    {
        $this->poolsEndDate = $poolsEndDate;

        return $this;
    }

    /**
     * Get poolsEndDate
     *
     * @return string
     */
    public function getPoolsEndDate()
    {
        return $this->poolsEndDate;
    }

    /**
     * Set published
     *
     * @param integer $published
     *
     * @return Pools
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return integer
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return Pools
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
