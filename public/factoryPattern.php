<?php

require_once '../vendor/autoload.php';

use App\Creational\FactoryPattern\ClientCode\DeliveryPackage;

$deliveryPackage = new DeliveryPackage();

echo $deliveryPackage->deliveryByLand().PHP_EOL;
echo $deliveryPackage->deliveryBySea().PHP_EOL;