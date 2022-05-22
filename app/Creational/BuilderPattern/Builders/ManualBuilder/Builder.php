<?php

namespace App\Creational\BuilderPattern\Builders\ManualBuilder;

use App\Creational\BuilderPattern\Contracts\Builder as ContractsBuilder;

class Builder implements ContractsBuilder
{
    private Manual $manual;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): self
    {
        $this->manual = new Manual();

        return $this;
    }

    public function setSeats(int $number): self
    {
        echo "Setting {$number} seats\n";

        return $this;
    }

    public function setEngine(string $engine): self
    {
        echo "Setting engine to {$engine}\n";

        return $this;
    }

    public function setTripComputer(): self
    {
        echo "Setting trip computer\n";

        return $this;
    }

    public function setGPS(): self
    {
        echo "Setting GPS\n";

        return $this;
    }

    public function get(): Manual
    {
        $manual = $this->manual;

        $this->reset();

        return $manual;
    }
}