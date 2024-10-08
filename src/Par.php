<?php



class Par
{

    private $num1;


    public function __construct($num1)
    {

        $this->num1 = $num1;
    }

    public function esPar(): string
    {

        if ($this->num1 % 2 == 1) {
            return "Es Impar";
        }
        return "Es Par";
    }

    public function esImpar(): string 
    {
        
        if ($this->num1 % 2 == 0) {
            return "Es Par";
        }
        return "Es Impar";
    }
}