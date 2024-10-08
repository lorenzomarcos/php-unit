<?php

use Practica\Tests\Vehicle;
use PHPUnit\Framework\TestCase;


class VehicleTest extends TestCase
{

    public function testSpeed(): void
    {
        $vehicle = new Vehicle("ferrari", "t5", "automatico");
        $this->assertEquals(0, $vehicle->speed());
    }

    public function testAccelerate(): void
    {
        $vehicle = new Vehicle("ferrari", "t5", "automatico");
        $vehicle->accelerate(300);
        $this->assertEquals(240, $vehicle->speed());
    }


    public function testCurb(): void
    {
        $vehicle = new Vehicle("ferrari", "t5", "automatico");
        $vehicle->accelerate(230);
        $vehicle->curb(30);
        $this->assertEquals(200, $vehicle->speed());
        $vehicle->curb(50);
        $this->assertEquals(150, $vehicle->speed());
    }

public function typeTransmission():void{

    $vehicle = new Vehicle("ferrari", "t5", "automatico");
    $this->assertEquals("Manual", $vehicle->typeTransmission());
}





  // TEST  Car 

 









}
