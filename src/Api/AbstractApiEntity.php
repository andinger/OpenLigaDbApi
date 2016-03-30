<?php

namespace Andinger\OpenLigaDbApi\Api;

use Andinger\OpenLigaDbApi\Model\Checkable;

abstract class AbstractApiEntity implements Checkable
{
    public function isValid()
    {
        return !$this->isEmpty();
    }
}