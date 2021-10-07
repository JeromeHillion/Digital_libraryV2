<?php
require_once ("Autoloader.php");
use Model\Category;
use Service\AuthorService;
use Service\BookService;
use Service\CategoryService;

/*use Dao\AuthorDao;*/
/*use Dao\BookDao;*/

/*$category_name ="Policier";*/

/*var_dump(CategoryDao::categoryExist($category_name));*/

/*AuthorDao::addAuthor();*/


BookService::addBooks();
/* CategoryService::addCategories();
AuthorService::addAuthors(); */
