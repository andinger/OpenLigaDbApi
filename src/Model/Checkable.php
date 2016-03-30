<?php

namespace Andinger\OpenLigaDbApi\Model;


interface Checkable
{
    /**
     * @return boolean true if entity is empty
     */
    public function isEmpty();

    /**
     * @return boolean true if entity is valid
     */
    public function isValid();
}