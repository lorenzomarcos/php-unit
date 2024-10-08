<?php
use Practica\Tests\Pet;
use PHPUnit\Framework\TestCase;




class PetTest extends  TestCase
{

    public function testPet()
    {
        $pet = new Pet("Pluto", 14, "Perro");
        $this->assertInstanceOf(Pet::class, $pet);
    }
}

