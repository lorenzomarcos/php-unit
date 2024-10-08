<?php

/*4. Clase "Rectángulo" con Métodos Computados
Crea una clase llamada Rectangulo que tenga las siguientes propiedades y métodos:
Propiedades:
ancho (decimal)
alto (decimal)
Métodos:
Constructor que reciba los valores de ancho y alto.
Método calcularArea() que devuelva el área del rectángulo.
Método calcularPerimetro() que devuelva el perímetro del rectángulo.
Objetivo: Trabajar con métodos que devuelven valores calculados y comprender el uso de fórmulas matemáticas simples en OOP.*/

class Rectangle {

    private $Broad;
    private $High;

    public function __construct(float $Broad, float $High)
    {
        $this->Broad=$Broad;
        $this->High=$High;
    }

    public function calculateArea(): float
    {

    $area=  $this->Broad * $this->High;
    return $area ;

    }
        

    public function calculatePerimeter(): float
    {
        $perimeter= 2 * ($this->Broad +  $this->High);
        return $perimeter;
    }




}

$rectangle= new Rectangle(10,6);
echo $rectangle->calculateArea();
echo $rectangle->calculatePerimeter();
