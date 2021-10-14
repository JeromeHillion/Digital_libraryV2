<?php
require_once ("Autoloader.php");
use Service\UserService;
use Service\BookService;
use Service\CategoryService;

$categories = CategoryService::getCategories();
$lastBooks = BookService::getNews();
$booksOfCategoryPolicier = BookService::getSmallListBooksByCategory('Policier');
require_once 'vue/home.php';