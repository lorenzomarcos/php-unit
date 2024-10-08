<?php
/*3. Clase "Vehículo" y Herencia
Crea una clase Vehiculo con las siguientes propiedades y métodos:
Propiedades:
marca (cadena de texto)
modelo (cadena de texto)
velocidad (decimal)
Métodos:
Constructor que reciba marca y modelo.
Método acelerar($cantidad) que aumente la velocidad.
Método frenar($cantidad) que disminuya la velocidad.
Luego, crea una clase Coche que herede de Vehiculo y agregue la propiedad:
numero_puertas (entero).
Objetivo: Introducir el concepto de herencia y extender clases en PHP */


class Vehicle {

    public $brand; 
    public $model;
    public $speed; 




    public function __construct(string $brand, string $model , int $speed )
    {
       $this->brand=$brand;
       $this->model=$model;
       $this->speed=$speed;
    }


public function accelerate($amount) : void 

{

$this->speed=$amount + $this->speed;

}

public function curb($amount) : void

{
    $this->speed=$this->speed - $amount;


}


}

 final class  car extends vehicle {

    public $number_Doors;



    public function __construct(string $brand, string $model, int $number_Doors , int $speed)
    {
        parent::__construct( $brand, $model , $speed);
        $this->number_Doors=$number_Doors;
    }

    public function showDescription() : string
    {
        return "Tu carro $this->brand de modelo  $this->model que tiene $this->number_Doors puertas  va  a una velocidad $this->speed  ";
    
    }
     
}

$vehicle1= new car ("toyota", "yaris",4, 200);

echo $vehicle1->showdescription();
$vehicle1->accelerate(100);
$vehicle1->curb(200);

