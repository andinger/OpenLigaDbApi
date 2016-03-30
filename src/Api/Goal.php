<?php

namespace Andinger\OpenLigaDbApi\Api;

class Goal extends AbstractApiEntity
{
    /**
     * @var integer
     */
    protected $goalID = null;

    /**
     * obviously the soap api has a typo here
     * @var integer
     */
    protected $goalMachID = null;

    /**
     * @var integer
     */
    protected $goalScoreTeam1 = null;

    /**
     * @var integer
     */
    protected $goalScoreTeam2 = null;

    /**
     * @var integer
     */
    protected $goalMatchMinute = null;

    /**
     * @var integer
     */
    protected $goalGetterID = null;

    /**
     * @var string
     */
    protected $goalGetterName = null;

    /**
     * @var boolean
     */
    protected $goalPenalty = null;

    /**
     * @var boolean
     */
    protected $goalOwnGoal = null;

    /**
     * @var boolean
     */
    protected $goalOvertime = null;

    /**
     * @var string
     */
    protected $goalComment = null;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->goalID;
    }

    /**
     * @return int
     */
    public function getMachtId()
    {
        return $this->goalMachID;
    }

    /**
     * @return int
     */
    public function getScoreTeam1()
    {
        return $this->goalScoreTeam1;
    }

    /**
     * @return int
     */
    public function getScoreTeam2()
    {
        return $this->goalScoreTeam2;
    }

    /**
     * @return int
     */
    public function getMatchMinute()
    {
        return $this->goalMatchMinute;
    }

    /**
     * @return int
     */
    public function getGoalGetterID()
    {
        return $this->goalGetterID;
    }

    /**
     * @return string
     */
    public function getGoalGetterName()
    {
        return $this->goalGetterName;
    }

    /**
     * @return boolean
     */
    public function isPenalty()
    {
        return $this->goalPenalty;
    }

    /**
     * @return boolean
     */
    public function isOwnGoal()
    {
        return $this->goalOwnGoal;
    }

    /**
     * @return boolean
     */
    public function isOvertime()
    {
        return $this->goalOvertime;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->goalComment;
    }

    public function isEmpty()
    {
        return (
            $this->goalID === null
            && $this->goalMachID === null
            && $this->goalScoreTeam1 === null
            && $this->goalScoreTeam2 === null
            && $this->goalMatchMinute === null
            && $this->goalGetterID === null
            && $this->goalGetterName === null
            && $this->goalPenalty === null
            && $this->goalOwnGoal === null
            && $this->goalOvertime === null
            && $this->goalComment === null
        );
    }

}