<?php

require_once '../vendor/autoload.php';


use App\Creational\AbstractFactoryPattern\ClientCode\ClientCode;
use App\Creational\AbstractFactoryPattern\FactoryAbstract\ModernFactory;
use App\Creational\AbstractFactoryPattern\FactoryAbstract\VictorianFactory;

$victorian = new ClientCode(new VictorianFactory);
$victorianChair = $victorian->getChair();

echo "Victorian Chair:" . $victorianChair->sitOn() . PHP_EOL;

$modern = new ClientCode(new ModernFactory);
$modernChair = $modern->getChair();

echo "Modern Chair:" . $modernChair->sitOn(). PHP_EOL;