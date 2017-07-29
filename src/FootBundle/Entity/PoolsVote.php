<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoolsVote
 *
 * @ORM\Table(name="pools_vote")
 * @ORM\Entity
 */
class PoolsVote
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pools_vote_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $poolsVoteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pools_id", type="integer", nullable=true)
     */
    private $poolsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pools_answers_id", type="integer", nullable=true)
     */
    private $poolsAnswersId;

    /**
     * @var string
     *
     * @ORM\Column(name="pools_vote_time", type="string", length=255, nullable=true)
     */
    private $poolsVoteTime;

    /**
     * @var string
     *
     * @ORM\Column(name="pools_vote_ip", type="string", length=255, nullable=true)
     */
    private $poolsVoteIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="_isdeleted", type="integer", nullable=true)
     */
    private $isdeleted;



    /**
     * Get poolsVoteId
     *
     * @return integer
     */
    public function getPoolsVoteId()
    {
        return $this->poolsVoteId;
    }

    /**
     * Set poolsId
     *
     * @param integer $poolsId
     *
     * @return PoolsVote
     */
    public function setPoolsId($poolsId)
    {
        $this->poolsId = $poolsId;

        return $this;
    }

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
     * Set poolsAnswersId
     *
     * @param integer $poolsAnswersId
     *
     * @return PoolsVote
     */
    public function setPoolsAnswersId($poolsAnswersId)
    {
        $this->poolsAnswersId = $poolsAnswersId;

        return $this;
    }

    /**
     * Get poolsAnswersId
     *
     * @return integer
     */
    public function getPoolsAnswersId()
    {
        return $this->poolsAnswersId;
    }

    /**
     * Set poolsVoteTime
     *
     * @param string $poolsVoteTime
     *
     * @return PoolsVote
     */
    public function setPoolsVoteTime($poolsVoteTime)
    {
        $this->poolsVoteTime = $poolsVoteTime;

        return $this;
    }

    /**
     * Get poolsVoteTime
     *
     * @return string
     */
    public function getPoolsVoteTime()
    {
        return $this->poolsVoteTime;
    }

    /**
     * Set poolsVoteIp
     *
     * @param string $poolsVoteIp
     *
     * @return PoolsVote
     */
    public function setPoolsVoteIp($poolsVoteIp)
    {
        $this->poolsVoteIp = $poolsVoteIp;

        return $this;
    }

    /**
     * Get poolsVoteIp
     *
     * @return string
     */
    public function getPoolsVoteIp()
    {
        return $this->poolsVoteIp;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return PoolsVote
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
