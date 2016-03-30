<?php
/**
 * Created by PhpStorm.
 * User: andi
 * Date: 30.03.16
 * Time: 19:22
 */

namespace Andinger\OpenLigaDbApi\Exception;


class ApiException extends \RuntimeException
{
    protected $response;

    public function __construct($message, $response)
    {
        $this->message = $message;
        $this->response = $response;
    }

    /**
     * @return int
     */
    public function getResponse()
    {
        return $this->response;
    }

}