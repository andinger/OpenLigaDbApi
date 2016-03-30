<?php
/**
 * Created by PhpStorm.
 * User: andi
 * Date: 30.03.16
 * Time: 19:21
 */

namespace Andinger\OpenLigaDbApi\Exception;


class InvalidEntityException extends ApiException
{
    public function __construct($response)
    {
        parent::__construct('mapped entity is invalid', $response);
    }
}