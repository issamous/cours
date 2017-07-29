<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="photo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $photoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="photo_album_id", type="integer", nullable=true)
     */
    private $photoAlbumId;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_title_fr", type="string", length=255, nullable=true)
     */
    private $photoTitleFr;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_title_ar", type="string", length=255, nullable=true)
     */
    private $photoTitleAr;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_desc_fr", type="text", length=65535, nullable=true)
     */
    private $photoDescFr;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_desc_ar", type="text", length=65535, nullable=true)
     */
    private $photoDescAr;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_image_file", type="string", length=255, nullable=true)
     */
    private $photoImageFile;

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
     * Get photoId
     *
     * @return integer
     */
    public function getPhotoId()
    {
        return $this->photoId;
    }

    /**
     * Set photoAlbumId
     *
     * @param integer $photoAlbumId
     *
     * @return Photo
     */
    public function setPhotoAlbumId($photoAlbumId)
    {
        $this->photoAlbumId = $photoAlbumId;

        return $this;
    }

    /**
     * Get photoAlbumId
     *
     * @return integer
     */
    public function getPhotoAlbumId()
    {
        return $this->photoAlbumId;
    }

    /**
     * Set photoTitleFr
     *
     * @param string $photoTitleFr
     *
     * @return Photo
     */
    public function setPhotoTitleFr($photoTitleFr)
    {
        $this->photoTitleFr = $photoTitleFr;

        return $this;
    }

    /**
     * Get photoTitleFr
     *
     * @return string
     */
    public function getPhotoTitleFr()
    {
        return $this->photoTitleFr;
    }

    /**
     * Set photoTitleAr
     *
     * @param string $photoTitleAr
     *
     * @return Photo
     */
    public function setPhotoTitleAr($photoTitleAr)
    {
        $this->photoTitleAr = $photoTitleAr;

        return $this;
    }

    /**
     * Get photoTitleAr
     *
     * @return string
     */
    public function getPhotoTitleAr()
    {
        return $this->photoTitleAr;
    }

    /**
     * Set photoDescFr
     *
     * @param string $photoDescFr
     *
     * @return Photo
     */
    public function setPhotoDescFr($photoDescFr)
    {
        $this->photoDescFr = $photoDescFr;

        return $this;
    }

    /**
     * Get photoDescFr
     *
     * @return string
     */
    public function getPhotoDescFr()
    {
        return $this->photoDescFr;
    }

    /**
     * Set photoDescAr
     *
     * @param string $photoDescAr
     *
     * @return Photo
     */
    public function setPhotoDescAr($photoDescAr)
    {
        $this->photoDescAr = $photoDescAr;

        return $this;
    }

    /**
     * Get photoDescAr
     *
     * @return string
     */
    public function getPhotoDescAr()
    {
        return $this->photoDescAr;
    }

    /**
     * Set photoImageFile
     *
     * @param string $photoImageFile
     *
     * @return Photo
     */
    public function setPhotoImageFile($photoImageFile)
    {
        $this->photoImageFile = $photoImageFile;

        return $this;
    }

    /**
     * Get photoImageFile
     *
     * @return string
     */
    public function getPhotoImageFile()
    {
        return $this->photoImageFile;
    }

    /**
     * Set published
     *
     * @param integer $published
     *
     * @return Photo
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
     * @return Photo
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
