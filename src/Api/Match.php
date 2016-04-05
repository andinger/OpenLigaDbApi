<?php

namespace Andinger\OpenLigaDbApi\Api;

use Andinger\OpenLigaDbApi\Utilities\TimezoneConverter;

class Match extends AbstractApiEntity
{
    /**
     * @var integer
     */
    protected $matchID = null;

    /**
     * @var \DateTime | string
     */
    protected $matchDateTime = null;

    /**
     * @var \DateTime | string
     */
    protected $matchDateTimeUTC = null;

    /**
     * @var integer
     */
    protected $groupID = null;

    /**
     * @var integer
     */
    protected $groupOrderID = null;

    /**
     * @var integer
     */
    protected $leagueID = null;

    /**
     * @var string
     */
    protected $nameTeam1 = null;

    /**
     * @var string
     */
    protected $nameTeam2 = null;

    /**
     * @var integer
     */
    protected $idTeam1 = null;

    /**
     * @var integer
     */
    protected $idTeam2 = null;

    /**
     * @var integer
     */
    protected $pointsTeam1 = null;

    /**
     * @var integer
     */
    protected $pointsTeam2 = null;

    /**
     * @var \DateTime | string
     */
    protected $lastUpdate = null;

    /**
     * @var boolean
     */
    protected $matchIsFinished = null;

    /**
     * @var Location
     */
    protected $location = null;

    /**
     * @var string
     */
    protected $TimeZoneID = null;

    /**
     * @var string
     */
    protected $groupName = null;

    /**
     * @var string
     */
    protected $leagueName = null;

    /**
     * @var integer
     */
    protected $leagueSaison = null;

    /**
     * @var string
     */
    protected $leagueShortcut = null;

    /**
     * @var string
     */
    protected $iconUrlTeam1 = null;

    /**
     * @var string
     */
    protected $iconUrlTeam2 = null;

    /**
     * @var ArrayOfMatchResults
     */
    protected $matchResults = null;

    /**
     * @var ArrayOfGoals
     */
    protected $goals = null;

    /**
     * @var integer
     */
    protected $NumberOfViewers = null;

    /**
     * @var MatchResult
     */
    protected $finalResult = null;

    /**
     * @var Group
     */
    protected $group = null;

    /**
     * @var Team
     */
    protected $team1 = null;

    /**
     * @var Team
     */
    protected $team2 = null;

    /**
     * @var League
     */
    protected $league = null;

    /**
     * @var \DateTimeZone
     */
    protected $timezone = null;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->matchID;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        if(!$this->matchDateTime instanceof \DateTimeInterface) {
            $this->matchDateTime = new \DateTime($this->matchDateTime, $this->getTimeZone());
        }

        return $this->matchDateTime;
    }

    /**
     * @return \DateTime
     */
    public function getDateTimeUTC()
    {
        if(!$this->matchDateTimeUTC instanceof \DateTimeInterface) {
            $this->matchDateTimeUTC = new \DateTime($this->matchDateTimeUTC, new \DateTimeZone('UTC'));
        }

        return $this->matchDateTimeUTC;
    }

    /**
     * @return integer
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * @return integer
     */
    public function getGroupOrderID()
    {
        return $this->groupOrderID;
    }

    /**
     * @return integer
     */
    public function getLeagueID()
    {
        return $this->leagueID;
    }

    /**
     * @return string
     */
    public function getNameTeam1()
    {
        return $this->nameTeam1;
    }

    /**
     * @return string
     */
    public function getNameTeam2()
    {
        return $this->nameTeam2;
    }

    /**
     * @return integer
     */
    public function getIdTeam1()
    {
        return $this->idTeam1;
    }

    /**
     * @return integer
     */
    public function getIdTeam2()
    {
        return $this->idTeam2;
    }

    /**
     * @return integer
     */
    public function getPointsTeam1()
    {
        return $this->pointsTeam1 < 0 ? 0 : $this->pointsTeam1;
    }

    /**
     * @return integer
     */
    public function getPointsTeam2()
    {
        return $this->pointsTeam2 < 0 ? 0 : $this->pointsTeam2;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        if(!$this->lastUpdate instanceof \DateTimeInterface) {
            $this->lastUpdate = new \DateTime($this->lastUpdate, $this->getTimeZone());
        }

        return $this->lastUpdate;
    }

    /**
     * @return boolean
     */
    public function isFinished()
    {
        return $this->matchIsFinished;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        if($this->timezone === null) {
            $this->timezone = new \DateTimeZone(TimezoneConverter::windowsToIana($this->TimeZoneID));
        }

        return $this->timezone;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @return string
     */
    public function getLeagueName()
    {
        return $this->leagueName;
    }

    /**
     * @return integer
     */
    public function getLeagueSeason()
    {
        return $this->leagueSaison;
    }

    /**
     * @return string
     */
    public function getLeagueShortcut()
    {
        return $this->leagueShortcut;
    }

    /**
     * @return string
     */
    public function getIconUrlTeam1()
    {
        return $this->iconUrlTeam1;
    }

    /**
     * @return string
     */
    public function getIconUrlTeam2()
    {
        return $this->iconUrlTeam2;
    }

    /**
     * @return ArrayOfMatchResults
     */
    public function getMatchResults()
    {
        return $this->matchResults->getMatchResults();
    }

    /**
     * @return MatchResult
     */
    public function getFinalResult()
    {
        return $this->matchResults->getFinalResult();
    }

    /**
     * @return ArrayOfGoals
     */
    public function getGoals()
    {
        return $this->goals->getGoals();
    }

    /**
     * @return integer
     */
    public function getNumberOfViewers()
    {
        return empty($this->NumberOfViewers) ? 0 : $this->NumberOfViewers;
    }

    /**
     * @return League
     */
    public function getLeague()
    {
        if($this->league === null) {
            $this->league = League::createFromMatch($this);
        }

        return $this->league;
    }

    /**
     * @return Team
     */
    public function getTeam1()
    {
        if($this->team1 === null) {
            $this->team1 = Team::create($this->getIdTeam1(), $this->getNameTeam1(), $this->getIconUrlTeam1());
        }

        return $this->team1;
    }

    /**
     * @return Team
     */
    public function getTeam2()
    {
        if($this->team2 === null) {
            $this->team2 = Team::create($this->getIdTeam2(), $this->getNameTeam2(), $this->getIconUrlTeam2());
        }

        return $this->team2;
    }

    /**
     * @return Group
     */
    public function getGroup()
    {
        if($this->group === null) {
            $this->group = Group::createFromMatch($this);
        }

        return $this->group;
    }

    public function isEmpty()
    {
        return (
            $this->matchID === null
            && $this->matchDateTime === null
            && $this->matchDateTimeUTC === null
            && $this->groupID === null
            && $this->groupOrderID === null
            && $this->leagueID === null
            && $this->nameTeam1 === null
            && $this->nameTeam2 === null
            && $this->idTeam1 === null
            && $this->idTeam2 === null
            && $this->pointsTeam1 === null
            && $this->pointsTeam2 === null
            && $this->lastUpdate === null
            && $this->matchIsFinished === null
            && $this->location === null
            && $this->TimeZoneID === null
            && $this->groupName === null
            && $this->leagueName === null
            && $this->leagueSaison === null
            && $this->leagueShortcut === null
            && $this->iconUrlTeam1 === null
            && $this->iconUrlTeam2 === null
            && $this->matchResults === null
            && $this->goals === null
            && $this->NumberOfViewers === null
        );
    }

}