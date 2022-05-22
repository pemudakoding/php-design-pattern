<?php

namespace App\Creational\BuilderPattern\Builders\ClientCode;

use App\Creational\BuilderPattern\Builders\CarsBuilder\Builder;
use App\Creational\BuilderPattern\Builders\Director;

class Client
{

    public function makeSportsCar()
    {
        $director = (new Director())
            ->setBuilder(new Builder);

        return $director
            ->setSeats(5)
            ->setEngine('V8')
            ->setTripComputer()
            ->get();
    }
}