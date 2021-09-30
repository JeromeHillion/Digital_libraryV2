<?php

namespace Service;
use Dao\CategoryDao;

class CategoryService
{

    public static function getCategoryIdByName(string $name):array
    {
        return CategoryDao::getCategoryIdByName($name);
    }


    public static function getCategories():array{
        return CategoryDao::categoriesName();
    }

}