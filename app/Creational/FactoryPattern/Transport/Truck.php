<?php

namespace App\Creational\FactoryPattern\Transport;

use App\Creational\FactoryPattern\Contracts\TransportContract;

class Truck implements TransportContract
{
    private $package;

    public function __construct(Array $package)
    {

        $this->package = $package;
    }

    public function deliver(): string
    {
        return 'Deliver by land in a box package name is ' . $this->package['name'];
    }
}