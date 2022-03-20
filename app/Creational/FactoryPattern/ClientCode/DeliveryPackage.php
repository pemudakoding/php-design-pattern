<?php

namespace App\Creational\FactoryPattern\ClientCode;

use App\Creational\FactoryPattern\Factories\RoadLogistic;
use App\Creational\FactoryPattern\Factories\SeaLogistic;

class DeliveryPackage
{

    public function deliveryByLand()
    {
        $data['package'] = [
            'name' => 'SAMSUNG LAPTOP',
        ];

        $factory = (new RoadLogistic($data))
            ->createTransport();

        return $factory->deliver();
    }

    public function deliveryBySea()
    {
        $data['package'] = [
            'name' => 'SAMSUNG LAPTOP',
        ];

        $factory = (new SeaLogistic($data))
            ->createTransport();

        return $factory->deliver();
    }
}
