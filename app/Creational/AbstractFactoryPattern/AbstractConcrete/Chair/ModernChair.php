<?php

namespace App\Creational\AbstractFactoryPattern\AbstractConcrete\Chair;

use App\Creational\AbstractFactoryPattern\Contracts\ChairContracts;

class ModernChair implements ChairContracts
{
    public function hasLegs(): bool
    {
        return true;
    }

    public function sitOn(): string
    {
        return 'Sitting on a modern chair';
    }
}