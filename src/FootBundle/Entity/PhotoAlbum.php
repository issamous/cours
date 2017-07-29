<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhotoAlbum
 *
 * @ORM\Table(name="photo_album")
 * @ORM\Entity
 */
class PhotoAlbum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="photo_album_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $photoAlbumId;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_album_name_fr", type="string", length=255, nullable=true)
     */
    private $photoAlbumNameFr;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_album_name_ar", type="string", length=255, nullable=true)
     */
    private $photoAlbumNameAr;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_album_desc_fr", type="text", length=65535, nullable=true)
     */
    private $photoAlbumDescFr;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_album_desc_ar", type="text", length=65535, nullable=true)
     */
    private $photoAlbumDescAr;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_album_cover_file", type="string", length=255, nullable=true)
     */
    private $photoAlbumCoverFile;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_album_location", type="string", length=255, nullable=true)
     */
    private $photoAlbumLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_album_date", type="string", length=255, nullable=true)
     */
    private $photoAlbumDate;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_album_publication_date", type="string", length=255, nullable=true)
     */
    private $photoAlbumPublicationDate;

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
     * Get photoAlbumId
     *
     * @return integer
     */
    public function getPhotoAlbumId()
    {
        return $this->photoAlbumId;
    }

    /**
     * Set photoAlbumNameFr
     *
     * @param string $photoAlbumNameFr
     *
     * @return PhotoAlbum
     */
    public function setPhotoAlbumNameFr($photoAlbumNameFr)
    {
        $this->photoAlbumNameFr = $photoAlbumNameFr;

        return $this;
    }

    /**
     * Get photoAlbumNameFr
     *
     * @return string
     */
    public function getPhotoAlbumNameFr()
    {
        return $this->photoAlbumNameFr;
    }

    /**
     * Set photoAlbumNameAr
     *
     * @param string $photoAlbumNameAr
     *
     * @return PhotoAlbum
     */
    public function setPhotoAlbumNameAr($photoAlbumNameAr)
    {
        $this->photoAlbumNameAr = $photoAlbumNameAr;

        return $this;
    }

    /**
     * Get photoAlbumNameAr
     *
     * @return string
     */
    public function getPhotoAlbumNameAr()
    {
        return $this->photoAlbumNameAr;
    }

    /**
     * Set photoAlbumDescFr
     *
     * @param string $photoAlbumDescFr
     *
     * @return PhotoAlbum
     */
    public function setPhotoAlbumDescFr($photoAlbumDescFr)
    {
        $this->photoAlbumDescFr = $photoAlbumDescFr;

        return $this;
    }

    /**
     * Get photoAlbumDescFr
     *
     * @return string
     */
    public function getPhotoAlbumDescFr()
    {
        return $this->photoAlbumDescFr;
    }

    /**
     * Set photoAlbumDescAr
     *
     * @param string $photoAlbumDescAr
     *
     * @return PhotoAlbum
     */
    public function setPhotoAlbumDescAr($photoAlbumDescAr)
    {
        $this->photoAlbumDescAr = $photoAlbumDescAr;

        return $this;
    }

    /**
     * Get photoAlbumDescAr
     *
     * @return string
     */
    public function getPhotoAlbumDescAr()
    {
        return $this->photoAlbumDescAr;
    }

    /**
     * Set photoAlbumCoverFile
     *
     * @param string $photoAlbumCoverFile
     *
     * @return PhotoAlbum
     */
    public function setPhotoAlbumCoverFile($photoAlbumCoverFile)
    {
        $this->photoAlbumCoverFile = $photoAlbumCoverFile;

        return $this;
    }

    /**
     * Get photoAlbumCoverFile
     *
     * @return string
     */
    public function getPhotoAlbumCoverFile()
    {
        return $this->photoAlbumCoverFile;
    }

    /**
     * Set photoAlbumLocation
     *
     * @param string $photoAlbumLocation
     *
     * @return PhotoAlbum
     */
    public function setPhotoAlbumLocation($photoAlbumLocation)
    {
        $this->photoAlbumLocation = $photoAlbumLocation;

        return $this;
    }

    /**
     * Get photoAlbumLocation
     *
     * @return string
     */
    public function getPhotoAlbumLocation()
    {
        return $this->photoAlbumLocation;
    }

    /**
     * Set photoAlbumDate
     *
     * @param string $photoAlbumDate
     *
     * @return PhotoAlbum
     */
    public function setPhotoAlbumDate($photoAlbumDate)
    {
        $this->photoAlbumDate = $photoAlbumDate;

        return $this;
    }

    /**
     * Get photoAlbumDate
     *
     * @return string
     */
    public function getPhotoAlbumDate()
    {
        return $this->photoAlbumDate;
    }

    /**
     * Set photoAlbumPublicationDate
     *
     * @param string $photoAlbumPublicationDate
     *
     * @return PhotoAlbum
     */
    public function setPhotoAlbumPublicationDate($photoAlbumPublicationDate)
    {
        $this->photoAlbumPublicationDate = $photoAlbumPublicationDate;

        return $this;
    }

    /**
     * Get photoAlbumPublicationDate
     *
     * @return string
     */
    public function getPhotoAlbumPublicationDate()
    {
        return $this->photoAlbumPublicationDate;
    }

    /**
     * Set published
     *
     * @param integer $published
     *
     * @return PhotoAlbum
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
     * @return PhotoAlbum
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
