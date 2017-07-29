<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flashnews
 *
 * @ORM\Table(name="flashnews")
 * @ORM\Entity
 */
class Flashnews
{
    /**
     * @var integer
     *
     * @ORM\Column(name="flashnews_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $flashnewsId;

    /**
     * @var string
     *
     * @ORM\Column(name="flashnews_category", type="string", length=255, nullable=true)
     */
    private $flashnewsCategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="news_id", type="integer", nullable=true)
     */
    private $newsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="flashnews_urgent", type="integer", nullable=true)
     */
    private $flashnewsUrgent;

    /**
     * @var integer
     *
     * @ORM\Column(name="_isdeleted", type="integer", nullable=true)
     */
    private $isdeleted;



    /**
     * Get flashnewsId
     *
     * @return integer
     */
    public function getFlashnewsId()
    {
        return $this->flashnewsId;
    }

    /**
     * Set flashnewsCategory
     *
     * @param string $flashnewsCategory
     *
     * @return Flashnews
     */
    public function setFlashnewsCategory($flashnewsCategory)
    {
        $this->flashnewsCategory = $flashnewsCategory;

        return $this;
    }

    /**
     * Get flashnewsCategory
     *
     * @return string
     */
    public function getFlashnewsCategory()
    {
        return $this->flashnewsCategory;
    }

    /**
     * Set newsId
     *
     * @param integer $newsId
     *
     * @return Flashnews
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get newsId
     *
     * @return integer
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Set flashnewsUrgent
     *
     * @param integer $flashnewsUrgent
     *
     * @return Flashnews
     */
    public function setFlashnewsUrgent($flashnewsUrgent)
    {
        $this->flashnewsUrgent = $flashnewsUrgent;

        return $this;
    }

    /**
     * Get flashnewsUrgent
     *
     * @return integer
     */
    public function getFlashnewsUrgent()
    {
        return $this->flashnewsUrgent;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return Flashnews
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
