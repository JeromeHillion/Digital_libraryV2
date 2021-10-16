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

    public static function addBooks(){
        return BookDao::addBooks();
    }

    public static function getNews(){
        return BookDao::getLastBooks();
    }

    public static function getSmallListBooksByCategory(string $category):array{
        return BookDao::getSmallListBooksByCategory($category);
    }

    public static function findBookByIdService($id){
        return BookDao::findBookById($id);
    }

    public static function findCategoryNameByIdService(int $id){
        return BookDao::findCategoryNameById($id);
    }
}