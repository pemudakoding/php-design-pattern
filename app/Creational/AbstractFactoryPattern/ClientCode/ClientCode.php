<?php

namespace App\Creational\AbstractFactoryPattern\ClientCode;

use App\Creational\AbstractFactoryPattern\Contracts\ChairContracts;
use App\Creational\AbstractFactoryPattern\Contracts\FurnitureFactoryContract;

class ClientCode
{
    private FurnitureFactoryContract $factory;

    public function __construct(FurnitureFactoryContract $factory)
    {
        $this->factory = $factory;
    }

    public function getChair(): ChairContracts
    {
        return $this->factory->createChair();
    }
}