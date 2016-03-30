<?php

namespace Andinger\OpenLigaDbApi\Api;

class League extends AbstractApiEntity
{
    /**
     * @var integer
     */
    protected $leagueID = null;

    /**
     * @var integer
     */
    protected $leagueSportID = null;

    /**
     * @var string
     */
    protected $leagueName = null;

    /**
     * @var string
     */
    protected $leagueShortcut = null;

    /**
     * @var integer
     */
    protected $leagueSaison = null;

    /**
     * @param Match $match
     * @return League 
     */
    public static function createFromMatch(Match $match)
    {
        $league = new self();
        $league->leagueID = $match->getLeagueID();
        $league->leagueName = $match->getLeagueName();
        $league->leagueShortcut = $match->getLeagueShortcut();
        $league->leagueSaison = $match->getLeagueSeason();

        return $league;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->leagueID;
    }

    /**
     * @return integer
     */
    public function getSportID()
    {
        return $this->leagueSportID;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->leagueName;
    }

    /**
     * @return string
     */
    public function getShortcut()
    {
        return $this->leagueShortcut;
    }

    /**
     * @return integer
     */
    public function getSeason()
    {
        return $this->leagueSaison;
    }

    public function isEmpty()
    {
        return (
            $this->leagueID === null
            && $this->leagueSportID === null
            && $this->leagueName === null
            && $this->leagueShortcut === null
            && $this->leagueSaison === null
        );
    }


}