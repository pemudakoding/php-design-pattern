<?php

namespace App\Creational\BuilderPattern\Builders;

use App\Creational\BuilderPattern\Contracts\Builder;

class Director
{
    public function setBuilder(Builder $builder)
    {
        return $builder;
    }
}