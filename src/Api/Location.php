<?php

namespace Andinger\OpenLigaDbApi\Api;

class Location extends AbstractApiEntity
{
    /**
     * @var integer
     */
    protected $locationID = null;

    /**
     * @var string
     */
    protected $locationCity = null;

    /**
     * @var string
     */
    protected $locationStadium = null;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->locationID;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->locationCity;
    }

    /**
     * @return string
     */
    public function getStadium()
    {
        return $this->locationStadium;
    }

    public function isEmpty()
    {
        return (
            $this->locationID === null
            && $this->locationCity === null
            && $this->locationStadium === null
        );
    }


}