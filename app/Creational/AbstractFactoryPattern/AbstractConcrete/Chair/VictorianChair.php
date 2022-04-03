<?php

namespace App\Creational\AbstractFactoryPattern\AbstractConcrete\Chair;

use App\Creational\AbstractFactoryPattern\Contracts\ChairContracts;

class VictorianChair implements ChairContracts
{
    public function hasLegs(): bool
    {
        return true;
    }

    public function sitOn(): string
    {
        return 'Sitting on a victorian chair';
    }
}