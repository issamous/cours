<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoolsAnswers
 *
 * @ORM\Table(name="pools_answers")
 * @ORM\Entity
 */
class PoolsAnswers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pools_answers_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $poolsAnswersId;

    /**
     * @var integer
     *
     * @ORM\Column(name="pools_id", type="integer", nullable=true)
     */
    private $poolsId;

    /**
     * @var string
     *
     * @ORM\Column(name="pools_answers_answer_fr", type="string", length=255, nullable=true)
     */
    private $poolsAnswersAnswerFr;

    /**
     * @var string
     *
     * @ORM\Column(name="pools_answers_answer_ar", type="string", length=255, nullable=true)
     */
    private $poolsAnswersAnswerAr;

    /**
     * @var integer
     *
     * @ORM\Column(name="_isdeleted", type="integer", nullable=true)
     */
    private $isdeleted;



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
     * Set poolsId
     *
     * @param integer $poolsId
     *
     * @return PoolsAnswers
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
     * Set poolsAnswersAnswerFr
     *
     * @param string $poolsAnswersAnswerFr
     *
     * @return PoolsAnswers
     */
    public function setPoolsAnswersAnswerFr($poolsAnswersAnswerFr)
    {
        $this->poolsAnswersAnswerFr = $poolsAnswersAnswerFr;

        return $this;
    }

    /**
     * Get poolsAnswersAnswerFr
     *
     * @return string
     */
    public function getPoolsAnswersAnswerFr()
    {
        return $this->poolsAnswersAnswerFr;
    }

    /**
     * Set poolsAnswersAnswerAr
     *
     * @param string $poolsAnswersAnswerAr
     *
     * @return PoolsAnswers
     */
    public function setPoolsAnswersAnswerAr($poolsAnswersAnswerAr)
    {
        $this->poolsAnswersAnswerAr = $poolsAnswersAnswerAr;

        return $this;
    }

    /**
     * Get poolsAnswersAnswerAr
     *
     * @return string
     */
    public function getPoolsAnswersAnswerAr()
    {
        return $this->poolsAnswersAnswerAr;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return PoolsAnswers
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
