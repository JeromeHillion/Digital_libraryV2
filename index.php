<?php
require_once ("Autoloader.php");
use Model\Category;
use Service\AuthorService;
use Service\BookService;
use Service\CategoryService;
use Service\UserService;

/*use dao\AuthorDao;*/
/*use dao\BookDao;*/

/*$category_name ="Policier";*/

/*var_dump(CategoryDao::categoryExist($category_name));*/

/*AuthorDao::addAuthor();*/

UserService::addUser();
/* CategoryService::addCategories();
AuthorService::addAuthors(); */
