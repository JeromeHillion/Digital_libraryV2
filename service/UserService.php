<?php

namespace Service;

use Dao\UserDao;

class UserService
{
    public static function addUser(){
        return UserDao::addUser();
    }
}