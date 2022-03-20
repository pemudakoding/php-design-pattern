<?php

namespace App\Creational\FactoryPattern\Transport;

use App\Creational\FactoryPattern\Contracts\TransportContract;

class Ship implements TransportContract
{
    private $package;

    public function __construct(Array $package)
    {
        return $this->package = $package;
    }

    public function deliver(): string
    {
        return 'Deliver by sea in a container package name is ' . $this->package['name'];
    }
}