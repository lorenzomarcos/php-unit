<?php

use PHPUnit\Framework\TestCase;
use Practica\Tests\Book;


class BookTest extends TestCase
{

    public function testShortNovel()
    {
        $book = new Book("Plata", "Carlos", 250);
        $this->assertEquals("Novela Larga",  $book->shortNovel());
    }
    public function testLongNovel()
    {
        $book = new book("Cosa", "Papel", 150);
        $this->assertEquals("Novela Corta", $book->longNovel());
    }
}
