<?php
require_once ("Autoloader.php");


use Service\AuthorService;
use Service\BookService;
use Service\CategoryService;

setlocale(LC_TIME, 'fr_FR.utf8','fra');
$bookDetails =BookService::findBookByIdService($_GET['id']);
$datePublication = utf8_encode(strftime("%A %d %B %G", strtotime($bookDetails['publication']))) ;
$category =CategoryService::findCategoryNameByIdService($bookDetails['category_id']);
$author =AuthorService::findAuthorNameByIdService($bookDetails['author_id']);
require 'vue/detailsBookView.php';

