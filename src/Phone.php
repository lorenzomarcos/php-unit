<?php

class Phone
{
    public $brand;
    public $model;
    public $price;

    public function __construct($brand, $model, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }

    public function call()
    {
        echo "te estan llamando";
    }

    public function obtainInfo()
    {

        echo "la marca es: $this->brand, el modelo es : $this->model, y tiene un precio de $this->price dolares ";
    }
}

class Cell extends Phone {}

final class Smartphone extends Cell {}


$cell = new Phone("xiaomi", "note 12", 130);
$cell->obtainInfo();
