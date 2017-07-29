<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity
 */
class Video
{
    /**
     * @var integer
     *
     * @ORM\Column(name="video_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $videoId;

    /**
     * @var string
     *
     * @ORM\Column(name="video_title", type="string", length=255, nullable=true)
     */
    private $videoTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="video_desc", type="string", length=255, nullable=true)
     */
    private $videoDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="video_youtube", type="string", length=255, nullable=true)
     */
    private $videoYoutube;

    /**
     * @var integer
     *
     * @ORM\Column(name="_isdeleted", type="integer", nullable=true)
     */
    private $isdeleted;



    /**
     * Get videoId
     *
     * @return integer
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Set videoTitle
     *
     * @param string $videoTitle
     *
     * @return Video
     */
    public function setVideoTitle($videoTitle)
    {
        $this->videoTitle = $videoTitle;

        return $this;
    }

    /**
     * Get videoTitle
     *
     * @return string
     */
    public function getVideoTitle()
    {
        return $this->videoTitle;
    }

    /**
     * Set videoDesc
     *
     * @param string $videoDesc
     *
     * @return Video
     */
    public function setVideoDesc($videoDesc)
    {
        $this->videoDesc = $videoDesc;

        return $this;
    }

    /**
     * Get videoDesc
     *
     * @return string
     */
    public function getVideoDesc()
    {
        return $this->videoDesc;
    }

    /**
     * Set videoYoutube
     *
     * @param string $videoYoutube
     *
     * @return Video
     */
    public function setVideoYoutube($videoYoutube)
    {
        $this->videoYoutube = $videoYoutube;

        return $this;
    }

    /**
     * Get videoYoutube
     *
     * @return string
     */
    public function getVideoYoutube()
    {
        return $this->videoYoutube;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return Video
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
