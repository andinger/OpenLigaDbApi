<?php

require 'vendor/autoload.php';

$client = new \Andinger\OpenLigaDbApi\Client();

var_dump($client->getAvailableLeagues());