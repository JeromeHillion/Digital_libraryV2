<?php
require_once ("Autoloader.php");
use Service\UserService;
use Service\BookService;
use Service\CategoryService;

$categories = CategoryService::getCategories();
$lastBooks = BookService::getNews();
$booksOfCategoryPolicier = BookService::getSmallListBooksByCategory('Policier');
$booksOfCategoryFantastique = BookService::getSmallListBooksByCategory('Fantastique');
$booksOfCategoryScienceFiction = BookService::getSmallListBooksByCategory('Science-fiction');
$booksOfCategoryRoman = BookService::getSmallListBooksByCategory('Roman');
$booksOfCategoryRomance = BookService::getSmallListBooksByCategory('Romance');
$booksOfCategoryAventure = BookService::getSmallListBooksByCategory('Aventure');
$booksOfCategoryBandesDessinees = BookService::getSmallListBooksByCategory('Bandes Dessinées');
$booksOfCategoryManga = BookService::getSmallListBooksByCategory('Manga');
require_once 'vue/home.php';

