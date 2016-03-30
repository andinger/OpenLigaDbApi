<?php

namespace Andinger\OpenLigaDbApi\Api;

use Andinger\OpenLigaDbApi\Model\Checkable;

class ArrayOfMatches implements Checkable
{
    /**
     * @var Match[]
     */
    protected $Matchdata = null;

    /**
     * @return Match[]
     */
    public function getMatches()
    {
        return $this->Matchdata;
    }

    public function isEmpty()
    {
        return $this->Matchdata === null;
    }

    public function isValid()
    {
        return is_array($this->Matchdata);
    }
}