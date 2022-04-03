<?php

namespace App\Creational\AbstractFactoryPattern\FactoryAbstract;

use App\Creational\AbstractFactoryPattern\AbstractConcrete\Chair\VictorianChair;
use App\Creational\AbstractFactoryPattern\Contracts\{
    ChairContracts,
    FurnitureFactoryContract
};

class VictorianFactory implements FurnitureFactoryContract
{
    public function createChair(): ChairContracts
    {
        return new VictorianChair();
    }
}