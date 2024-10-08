<?php


class  Car {

   private  $marca;
    
   private $modelo;
   
   private  $año;

public function __construct($marca, $modelo, $año)
{
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->año = $año;
}

function marca(){
    return $this->marca;
 
}


function setMarca($marca){
    $this->marca=$marca;
  
}

function model(){
    return $this->modelo;
}

function setModel($modelo){
$this->modelo=$modelo;
}

function año(){
    return $this->año;
}

function setAño($año){
    $this->año=$año;
}


public function mostrarinfo ( ) {

echo "el coche es  $this->marca, $this->modelo, y es de $this->año<br>";
}

}

$car1 = new car("toyota", "yaris", 2015);
$car2 = new car("chevrolet", "tundra", 2020);
$car1->setModel("subaru");
$car1->setAño("1997");

$car1->mostrarinfo();
$car2->mostrarinfo();


