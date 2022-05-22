<?php

namespace App\Creational\BuilderPattern\Contracts;

interface Builder
{
    public function reset(): self;

    public function setSeats(int $number): self;

    public function setEngine(string $engine): self;

    public function setTripComputer(): self;

    public function setGPS(): self;

    public function get(): object;
}