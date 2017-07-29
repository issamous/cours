<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string", length=255, nullable=true)
     */
    private $categoryName;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_parent", type="integer", nullable=true)
     */
    private $categoryParent;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_order", type="integer", nullable=true)
     */
    private $categoryOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="category_image_file", type="string", length=255, nullable=true)
     */
    private $categoryImageFile;

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
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categoryParent
     *
     * @param integer $categoryParent
     *
     * @return Category
     */
    public function setCategoryParent($categoryParent)
    {
        $this->categoryParent = $categoryParent;

        return $this;
    }

    /**
     * Get categoryParent
     *
     * @return integer
     */
    public function getCategoryParent()
    {
        return $this->categoryParent;
    }

    /**
     * Set categoryOrder
     *
     * @param integer $categoryOrder
     *
     * @return Category
     */
    public function setCategoryOrder($categoryOrder)
    {
        $this->categoryOrder = $categoryOrder;

        return $this;
    }

    /**
     * Get categoryOrder
     *
     * @return integer
     */
    public function getCategoryOrder()
    {
        return $this->categoryOrder;
    }

    /**
     * Set categoryImageFile
     *
     * @param string $categoryImageFile
     *
     * @return Category
     */
    public function setCategoryImageFile($categoryImageFile)
    {
        $this->categoryImageFile = $categoryImageFile;

        return $this;
    }

    /**
     * Get categoryImageFile
     *
     * @return string
     */
    public function getCategoryImageFile()
    {
        return $this->categoryImageFile;
    }

    /**
     * Set published
     *
     * @param integer $published
     *
     * @return Category
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
     * @return Category
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
