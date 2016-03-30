<?php

namespace Andinger\OpenLigaDbApi\Api;

use Andinger\OpenLigaDbApi\Model\Checkable;

class ArrayOfGroups implements Checkable
{
    /**
     * @var Group[]
     */
    protected $Group = null;

    /**
     * @return Group[]
     */
    public function getGroups()
    {
        return $this->Group;
    }

    public function isEmpty()
    {
        return $this->Group === null;
    }

    public function isValid()
    {
        return is_array($this->Group);
    }


}