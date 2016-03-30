<?php

namespace Andinger\OpenLigaDbApi\Api;

use Andinger\OpenLigaDbApi\Model\Checkable;

class ArrayOfLeagues implements Checkable
{
    /**
     * @var League[]
     */
    protected $League = null;

    /**
     * @return League[]
     */
    public function getLeagues()
    {
        return $this->League;
    }

    public function isEmpty()
    {
        return $this->League === null;
    }

    public function isValid()
    {
        return is_array($this->League);
    }
}