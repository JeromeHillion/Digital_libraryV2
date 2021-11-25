<?php

namespace App\Controller;


use DateTime;
use App\Entity\Book;
use App\Manager\ApiManager;


ini_set('display_errors', true);



require '../../vendor/autoload.php';

require '../Vue/Admin/catalog.php';


$apiManager = new ApiManager;
$datas = $apiManager->getJsonFile();

foreach ($datas as $data) {
    $book = new Book;

    $book->setCover($data->cover)
        ->setName($data->name)
        ->setPublication(new DateTime($data->publication))
        ->setSummary($data->summary);
}

var_dump($book);
