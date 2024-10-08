<?php

use PHPUnit\Framework\TestCase;
use Practica\Tests\Person;
class PersonTest extends TestCase {
    public function testPerson() {
        $person = new Person("marcos", 27);
        $this->assertInstanceOf( Person::class, $person );
}
}