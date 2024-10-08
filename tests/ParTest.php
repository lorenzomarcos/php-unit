<?php
require 'vendor/autoload.php';
require 'src/Par.php';

use PHPUnit\Framework\TestCase;




class ParTest extends TestCase
{

    public function testEsPar(): void
    {
        $par = new Par(8);

        $this->assertEquals("Es Par", $par->esPar());
    }

    public function testEsImpar(): void
    {
        $par1 = new Par(7);
        $this->assertEquals("Es Impar", $par1->esImpar());
    }
}
