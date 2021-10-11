<?php

namespace Service;

use Dao\AuthorDao;

class AuthorService
{
    public static function getAuthorIdByName(string $name):array
    {
        return AuthorDao::getAuthorIdByName($name);
    }


    public static function getAuthors():array{
        return AuthorDao::authorsName();
    }

    public static function addAuthors(){
        return AuthorDao::addAuthor();
    }
}