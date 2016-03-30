<?php
/**
 * Created by PhpStorm.
 * User: andi
 * Date: 30.03.16
 * Time: 18:23
 */

namespace Andinger\OpenLigaDbApi\Api;


class Team extends AbstractApiEntity
{
    /**
     * @var integer
     */
    protected $teamID = null;

    /**
     * @var string
     */
    protected $teamName = null;

    /**
     * @var string
     */
    protected $teamIconURL = null;

    /**
     * @param integer $teamId
     * @param string $teamName
     * @param string $teamIconUrl
     *
     * @return Team
     */
    public static function create($teamId, $teamName, $teamIconUrl)
    {
        $team = new self();
        $team->teamID = $teamId;
        $team->teamName = $teamName;
        $team->teamIconURL = $teamIconUrl;

        return $team;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->teamID;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->teamName;
    }

    /**
     * @return string
     */
    public function getIconURL()
    {
        return $this->teamIconURL;
    }

    public function isEmpty()
    {
        return (
            $this->teamID === null
            && $this->teamName === null
            && $this->teamIconURL === null
        );
    }


}