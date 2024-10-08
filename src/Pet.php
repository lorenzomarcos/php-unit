<?php

/*### Ejercicio : Clase Mascota
Descripción: Crea una clase Mascota que tenga los siguientes atributos:
- Nombre
- Tipo (ejemplo: perro, gato)
- Edad

Métodos:
- Un método para mostrar información de la mascota.
- Un método que emita un sonido característico del tipo de mascota (por ejemplo, "Guau" para un perro y "Miau" para un gato).*/

/*### Ejercicio : Herencia
Descripción: Crea una clase base Animal con un método hacerSonido(). 
Luego, crea dos clases derivadas Perro y Gato que sobrescriban el método hacerSonido() 
para que devuelvan "Guau" y "Miau", respectivamente. */




namespace Practica\Tests;

class Pet
{

    public $name;
    public  $type;
    public $age;
    private $sound;


    public function __construct(string $name, int $age,  string $type)
    {
        $this->name = $name;
        $this->age = $age;
        $this->type = $type;
    }

    public function petInformation()
    {

        echo "$this->name es un $this->type  y tiene $this->age años de edad";
    }
}

class Doog extends Pet
{


    public function __construct($name,  $age, $type)
    {
        parent::__construct($name, $age, $type);
    }

    public function sound()
    {
        print "Guau";
    }

    public function petInformation()
    {

        echo "$this->name es un $this->type  y tiene $this->age años de edad";
    }
}

final class Cat  extends Doog
{


    public function __construct($name,   $age, $type)
    {
        parent::__construct($name,  $age, $type);
    }

    public function sound()
    {
        print " Miau ";
    }

    public function petInformation()
    {

        echo "$this->name es un $this->type  y tiene $this->age años de edad";
    }
}



//$pet = new pet ("bandido", 12, "gato");
//$pet->petInformation();

/*$pet2 = new doog ("rufus", 54 , "perro");
$pet2->petInformation();
$pet2->sound();*/



/*$pet3 = new cat("misu", 13, "gato");
$pet3->petInformation();
$pet3->sound();*/
