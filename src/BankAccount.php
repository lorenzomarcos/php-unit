<?php

/*2. Clase "Cuenta Bancaria"
Crea una clase llamada CuentaBancaria con las siguientes propiedades y métodos:
Propiedades:
titular (cadena de texto)
saldo (decimal)
Métodos:
Constructor que reciba el titular y el saldo.
Método depositar($cantidad) que aumente el saldo.
Método retirar($cantidad) que disminuya el saldo.
Método mostrarSaldo() que imprima el saldo actual.
Objetivo: Trabajar con propiedades privadas, métodos para modificar el estado y el manejo de datos.*/ 

class BankAccount {

   private  $Holder;
   private  $Balance;
   
   

public function __construct(string $Holder, float $Balance, )
{
   $this->Holder=$Holder;
   $this->Balance=$Balance;
   
}

public function deposit($amount): void
{
 $this->Balance=$amount + $this->Balance;
  

}


public function withdraw($amount):void
{
   $this->Balance=$this->Balance - $amount;
   
}

public function showBalance()
{
   echo "$this->Holder   tu saldo actual es $this->Balance \n <br>";
   

}

}

$Holder1= new Bankaccount ("marcos", 300);
$Holder1->showBalance();
$Holder1->deposit(500);
$Holder1->withdraw(100);
$Holder1->showBalance();