<?php

namespace App\Creational\FactoryPattern\Contracts;

interface TransportContract
{
    public function deliver(): string;
}