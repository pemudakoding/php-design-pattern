<?php

namespace App\Creational\FactoryPattern\Factories;

use App\Creational\FactoryPattern\Contracts\TransportContract;
use App\Creational\FactoryPattern\Transport\Ship;

class SeaLogistic extends Logistics
{
    public $data;

    public function  __construct(Array $data)
    {
        $this->data = $data;
    }

    public function createTransport(): TransportContract
    {
        return new Ship($this->getPackage());
    }
}