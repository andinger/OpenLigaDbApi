<?php

namespace Andinger\OpenLigaDbApi\Api;

class Sport extends AbstractApiEntity
{
    /**
     * @var integer
     */
    protected $sportsID = null;

    /**
     * @var string
     */
    protected $sportsName = null;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->sportsID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->sportsName;
    }

    public function isEmpty()
    {
        return (
            $this->sportsID === null
            && $this->sportsName === null
        );
    }

}