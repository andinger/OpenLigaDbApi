<?php
/**
 * Created by PhpStorm.
 * User: andi
 * Date: 30.03.16
 * Time: 19:21
 */

namespace Andinger\OpenLigaDbApi\Exception;


class EmptyEntityException extends ApiException
{
    public function __construct($response)
    {
        parent::__construct('mapped entity is empty', $response);
    }
}