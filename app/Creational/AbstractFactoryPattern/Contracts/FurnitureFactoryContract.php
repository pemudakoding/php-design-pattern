<?php

namespace App\Creational\AbstractFactoryPattern\Contracts;

interface FurnitureFactoryContract
{
    public function createChair(): ChairContracts;
}