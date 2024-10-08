<?php
/*### Ejercicio : Clase Libro
Descripción: Crea una clase Libro que tenga los siguientes atributos:
- Título
- Autor
- Número de páginas


Métodos:
- Un método para mostrar información del libro.
- Un método que determine si el libro es una novela corta (menos de 150 páginas).*/

namespace Practica\Tests;

class Book
{

    public  $qualification;
    public  $author;
    public $numberOfPages;



    public function __construct($qualification, $author, $numberOfPages)
    {
        $this->qualification = $qualification;
        $this->author = $author;
        $this->numberOfPages = $numberOfPages;
    }


    public function bookInformation(): void
    {

        echo "El libro $this->qualification de autor $this->author tiene $this->numberOfPages paginas y  ";
    }


    public function longNovel(): string
    {
        if ($this->numberOfPages >= 200) {
            return "Novela Larga";
        }
        return "Novela Corta";
    }

    public function shortNovel(): string
    {
        if ($this->numberOfPages <= 200) {
            return "Novela Corta";
        }
        return "Novela Larga";
    }
}

//$book1 = new book("Sin Plata", "Pedro Perez", 150);
//$book1->bookInformation();
 //echo $book1->shortNovel();
