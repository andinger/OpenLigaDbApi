<?php

namespace Andinger\OpenLigaDbApi\Api;

class MatchResult extends AbstractApiEntity
{
    /**
     * @var string
     */
    protected $resultName = null;

    /**
     * @var integer
     */
    protected $pointsTeam1 = null;

    /**
     * @var integer
     */
    protected $pointsTeam2 = null;

    /**
     * @var integer
     */
    protected $resultOrderID = null;

    /**
     * @var string
     */
    protected $resultTypeName = null;

    /**
     * @var integer
     */
    protected $resultTypeId = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->resultName;
    }

    /**
     * @return integer
     */
    public function getPointsTeam1()
    {
        return $this->pointsTeam1;
    }

    /**
     * @return integer
     */
    public function getPointsTeam2()
    {
        return $this->pointsTeam2;
    }

    /**
     * @return integer
     */
    public function getOrderID()
    {
        return $this->resultOrderID;
    }

    /**
     * @return string
     */
    public function getTypeName()
    {
        return $this->resultTypeName;
    }

    /**
     * @return integer
     */
    public function getTypeId()
    {
        return $this->resultTypeId;
    }

    public function isEmpty()
    {
        return (
            $this->resultName === null
            && $this->pointsTeam1 === null
            && $this->pointsTeam2 === null
            && $this->resultOrderID === null
            && $this->resultTypeName === null
            && $this->resultTypeId === null
        );
    }
}