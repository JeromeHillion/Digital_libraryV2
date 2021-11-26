<?php

namespace App\Repository;

use App\MySql\App;
use App\Entity\Book;
use Service\DataApi;
use const App\MySql\T_BOOK;
use App\MySql\BddConnection ;

class BookRepository
{

    public String $_tname;
    public BddConnection $connexion;

    public function __construct()
    {
        $this->connexion = App::getInstance()->getConnection();
        $this->t_name = T_BOOK;
    }

    public static function save(Book $book)
    {
        var_dump($book->getData());
    }
}
