<?php

namespace FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatchHas
 *
 * @ORM\Table(name="match_has")
 * @ORM\Entity
 */
class MatchHas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="match_has_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matchHasId;

    /**
     * @var integer
     *
     * @ORM\Column(name="equipe_1", type="integer", nullable=false)
     */
    private $equipe1;

    /**
     * @var integer
     *
     * @ORM\Column(name="equipe_2", type="integer", nullable=false)
     */
    private $equipe2;

    /**
     * @var integer
     *
     * @ORM\Column(name="equipe_date", type="integer", nullable=false)
     */
    private $equipeDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="match_has_active", type="integer", nullable=false)
     */
    private $matchHasActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="_isdeleted", type="integer", nullable=false)
     */
    private $isdeleted;



    /**
     * Get matchHasId
     *
     * @return integer
     */
    public function getMatchHasId()
    {
        return $this->matchHasId;
    }

    /**
     * Set equipe1
     *
     * @param integer $equipe1
     *
     * @return MatchHas
     */
    public function setEquipe1($equipe1)
    {
        $this->equipe1 = $equipe1;

        return $this;
    }

    /**
     * Get equipe1
     *
     * @return integer
     */
    public function getEquipe1()
    {
        return $this->equipe1;
    }

    /**
     * Set equipe2
     *
     * @param integer $equipe2
     *
     * @return MatchHas
     */
    public function setEquipe2($equipe2)
    {
        $this->equipe2 = $equipe2;

        return $this;
    }

    /**
     * Get equipe2
     *
     * @return integer
     */
    public function getEquipe2()
    {
        return $this->equipe2;
    }

    /**
     * Set equipeDate
     *
     * @param integer $equipeDate
     *
     * @return MatchHas
     */
    public function setEquipeDate($equipeDate)
    {
        $this->equipeDate = $equipeDate;

        return $this;
    }

    /**
     * Get equipeDate
     *
     * @return integer
     */
    public function getEquipeDate()
    {
        return $this->equipeDate;
    }

    /**
     * Set matchHasActive
     *
     * @param integer $matchHasActive
     *
     * @return MatchHas
     */
    public function setMatchHasActive($matchHasActive)
    {
        $this->matchHasActive = $matchHasActive;

        return $this;
    }

    /**
     * Get matchHasActive
     *
     * @return integer
     */
    public function getMatchHasActive()
    {
        return $this->matchHasActive;
    }

    /**
     * Set isdeleted
     *
     * @param integer $isdeleted
     *
     * @return MatchHas
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
