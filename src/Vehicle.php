<?php

namespace Practica\Tests\Vehicle;

class Vehicle
{

    public $brand;
    public $model;
    private $speed = 0;
    protected $typeTransmission;


    public function __construct(string $brand,  string $model, string $typeTransmission)
    {

        $this->brand = $brand;
        $this->model = $model;
        $this->typeTransmission = $typeTransmission;
        $this->speed = 0;
    }

    public function accelerate($quantity): void
    {
        if ($this->speed + $quantity < 0) {

            throw new \InvalidArgumentException("No se puede acelerar en negativo");
        }

        $this->speed += $quantity;
    }




    public function curb($quantity): void
    {
        if ($this->speed - $quantity < 0) {

            throw new \InvalidArgumentException("No se puede frenar  en negativo");
        }
        $this->speed -= $quantity;

        if ($this->speed < 0) {
            $this->speed = 0;
        }
    }



    public function speed(): float
    {
        return $this->speed;
    }
    public function typeTransmission(): string
    {
        return $this->typeTransmission;
    }
}

class Car extends Vehicle
{

    protected $numberDoors;

    public function __construct(string $brand, string $model, string $typeTransmission, int $numberDoors)
    {
        parent::__construct($brand, $model, $typeTransmission);
        $this->numberDoors = $numberDoors;
    }


    public function accelerate($quantity): void
    {
        parent::accelerate($quantity);
        if ($this->speed > 240) {
            throw new \InvalidArgumentException("No se puede superar los limites de velocidad");
        }
        $this->speed += $quantity;
    }

    public function NumberDoor(): int
    {
        return $this->numberDoors;
    }
}

class Motorbike extends Vehicle
{

    protected $displacement;

    public function __construct(string $brand, string $model,  string $typeTransmission, int $displacement)
    {
        parent::__construct($brand, $model, $typeTransmission);
        $this->displacement = $displacement;
    }

    public function accelerate($quantity): void
    {
        parent::accelerate($quantity);
        if ($this->speed > 180) {
            $this->speed = 180;
        }
    }

    public function displacementType($displacement): void
    {
        if ($this->displacement < 0) {
            throw new \InvalidArgumentException("No se adminte cilindrada en negativo");
        }
        $this->displacement = $displacement;
    }

    public function displacement(): int
    {
        return $this->displacement;
    }
}

final class Truck extends Vehicle
{

    protected $loadCapacity;

    public function __construct(string $brand, string $model,  string $typeTransmission, float $loadCapacity)
    {
        parent::__construct($brand, $model, $typeTransmission);
        $this->loadCapacity = $loadCapacity;
    }

    public function accelerate($quantity): void
    {
        parent::accelerate($quantity);
        if ($this->speed > 120) {
            $this->speed = 120;
        }
    }

    public function loadCapacity($loadCapacity): void
    {
        if ($this->loadCapacity < 0) {
            throw new \InvalidArgumentException("La carga no puede ser negativa");
        }
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity(): float
    {
        return $this->loadCapacity;
    }
}
