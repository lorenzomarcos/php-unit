<?php

/*1. Clase "Persona"
Crea una clase llamada Persona que tenga las siguientes propiedades y métodos:
Propiedades:
nombre (cadena de texto)
edad (entero)
Métodos:
Constructor que reciba y asigne valores a las propiedades nombre y edad.
Un método llamado presentarse() que imprima en pantalla una presentación en el formato: "Hola, mi nombre es [nombre] y tengo [edad] años."
Objetivo: Practicar el uso de clases, propiedades, constructores y métodos simples.*/


namespace Practica\Tests;

class Person
{

    public $name;

    public $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }



    public function introduceyourself()
    {

        echo "Hola, mi nombre es $this->name y tengo $this->age años";
    }
}

/*$person1 = new Person("Marcos", 30);
$person1->introduceyourself();*/
