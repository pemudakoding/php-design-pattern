<?php

use App\Creational\BuilderPattern\Builders\ClientCode\Client;

require_once '../vendor/autoload.php';

$clientCode = new Client();

$clientCode->makeSportsCar();