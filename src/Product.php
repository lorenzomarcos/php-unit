<?php

/*5. Clase "Producto" con Descuento
Crea una clase llamada Producto con las siguientes propiedades y métodos:
Propiedades:
nombre (cadena de texto)
precio (decimal)
Métodos:
Constructor que reciba nombre y precio.
Método aplicarDescuento($porcentaje) que reduzca el precio según el porcentaje de descuento.
Método mostrarInformacion() que imprima el nombre del producto y el precio final después del descuento.
Objetivo: Manejo de propiedades y métodos que manipulan valores numéricos con operaciones aritméticas.*/


class Product
{

    private $name;
    private $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function applyDiscount($percentage): float
    {
        $mount = $this->price * ($percentage / 100);
        $pricetotal = $this->price - $mount;

        return $pricetotal;
    }

    public function showInformation(): string
    {
        return $this->name .  " tiene un costo de " . $this->applyDiscount(50);
    }
}
$arroz = new Product("arroz", 700);
$arroz->applyDiscount(20);
echo $arroz->showInformation();
