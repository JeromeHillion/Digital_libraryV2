<?php

use Service\BookService;
require_once ("Autoloader.php");
/* use Model\Category; */
/*use Dao\AuthorDao;*/
/*use Dao\BookDao;*/

/*$category_name ="Policier";*/

/*var_dump(CategoryDao::categoryExist($category_name));*/

/*AuthorDao::addAuthor();*/


/* var_dump(\Service\BookService::getBookIdByname("Rien ne t'efface")); */
/*$author = "Wendy Delorme";*/
/*BookDao::addBooks();*/

BookService::getBooks();