<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(name="news_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsId;

    /**
     * @ORM\ManyToOne(targetEntity="FootBundle\Entity\Category", inversedBy="categoryId")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="news_title", type="string", length=255, nullable=true)
     */
    private $newsTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="news_content", type="text", length=65535, nullable=true)
     */
    private $newsContent;

    /**
     * @var string
     *
     * @ORM\Column(name="news_image_file", type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Please, upload the product image as file.")
     * @Assert\Image(
     *     mimeTypesMessage="This file is not a valid image."
     * )
     */
    private $newsImageFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="news_date", type="integer", nullable=true)
     */
    private $newsDate;

    /**
     * @var string
     *
     * @ORM\Column(name="news_video", type="string", length=255, nullable=true)
     */
    private $newsVideo;

    /**
     * @var integer
     *
     * @ORM\Column(name="_featured", type="integer", nullable=true)
     */
    private $featured;

    /**
     * @var integer
     *
     * @ORM\Column(name="_published", type="integer", nullable=true)
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="news_vu", type="integer", nullable=false)
     */
    private $newsVu=0;

    /**
     * @var integer
     *
     * @ORM\Column(name="_isdeleted", type="integer", nullable=true)
     */
    private $isdeleted;



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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return News
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set newsTitle
     *
     * @param string $newsTitle
     *
     * @return News
     */
    public function setNewsTitle($newsTitle)
    {
        $this->newsTitle = $newsTitle;

        return $this;
    }

    /**
     * Get newsTitle
     *
     * @return string
     */
    public function getNewsTitle()
    {
        return $this->newsTitle;
    }

    /**
     * Set newsContent
     *
     * @param string $newsContent
     *
     * @return News
     */
    public function setNewsContent($newsContent)
    {
        $this->newsContent = $newsContent;

        return $this;
    }

    /**
     * Get newsContent
     *
     * @return string
     */
    public function getNewsContent()
    {
        return $this->newsContent;
    }

    /**
     * Set newsImageFile
     *
     * @param string $newsImageFile
     *
     * @return News
     */
    public function setNewsImageFile($newsImageFile)
    {
        $this->newsImageFile = $newsImageFile;

        return $this;
    }

    /**
     * Get newsImageFile
     *
     * @return string
     */
    public function getNewsImageFile()
    {
        return $this->newsImageFile;
    }

    /**
     * Set newsDate
     *
     * @param integer $newsDate
     *
     * @return News
     */
    public function setNewsDate($newsDate)
    {
        $this->newsDate = $newsDate;

        return $this;
    }

    /**
     * Get newsDate
     *
     * @return integer
     */
    public function getNewsDate()
    {
        return $this->newsDate;
    }

    /**
     * Set newsVideo
     *
     * @param string $newsVideo
     *
     * @return News
     */
    public function setNewsVideo($newsVideo)
    {
        $this->newsVideo = $newsVideo;

        return $this;
    }

    /**
     * Get newsVideo
     *
     * @return string
     */
    public function getNewsVideo()
    {
        return $this->newsVideo;
    }

    /**
     * Set featured
     *
     * @param integer $featured
     *
     * @return News
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * Get featured
     *
     * @return integer
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Set published
     *
     * @param integer $published
     *
     * @return News
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
     * Set newsVu
     *
     * @param integer $newsVu
     *
     * @return News
     */
    public function setNewsVu($newsVu)
    {
        $this->newsVu = $newsVu;

        return $this;
    }

    /**
     * Get newsVu
     *
     * @return integer
     */
    public function getNewsVu()
    {
        return $this->newsVu;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return News
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
