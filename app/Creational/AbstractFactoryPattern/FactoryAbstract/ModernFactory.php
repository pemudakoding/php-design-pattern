<?php

namespace App\Creational\AbstractFactoryPattern\FactoryAbstract;

use App\Creational\AbstractFactoryPattern\AbstractConcrete\Chair\ModernChair;
use App\Creational\AbstractFactoryPattern\Contracts\{ChairContracts, FurnitureFactoryContract};

class ModernFactory implements FurnitureFactoryContract
{
    public function createChair(): ChairContracts
    {
        return new ModernChair();
    }
}