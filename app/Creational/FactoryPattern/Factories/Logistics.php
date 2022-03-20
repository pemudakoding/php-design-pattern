<?php

namespace App\Creational\FactoryPattern\Factories;

use App\Creational\FactoryPattern\Contracts\TransportContract;

Abstract class Logistics
{
    public function getPackage()
    {
        return $this->data['package'];
    }

    abstract function createTransport(): TransportContract;
}