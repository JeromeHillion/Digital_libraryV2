<?php
require_once ("Autoloader.php");
use Model\Category;
/*use Dao\AuthorDao;*/
/*use Dao\BookDao;*/

/*$category_name ="Policier";*/

/*var_dump(CategoryDao::categoryExist($category_name));*/

/*AuthorDao::addAuthor();*/


\Service\BookService::addBooks();
/*\Service\CategoryService::addCategories();*/
/*\Service\AuthorService::addAuthors();*/
/*$author = "Wendy Delorme";*/
/*BookDao::addBooks();*/