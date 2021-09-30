<?php

namespace Service;

use Dao\BookDao;

class BookService
{
    public static function getBooks():array{
        return BookDao::booksName();
    }

    public static function getBookIdByname(string $book): array{
        return BookDao::getBookIdByname($book);
    }
}