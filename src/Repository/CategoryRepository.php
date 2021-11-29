<?php

namespace App\Repository;

use App\Manager\ApiManager;
use App\MySql\App;
use App\MySql\BddConnection;
use App\Entity\Category;


use const App\MySql\T_CATEGORY;


class CategoryRepository
{
    public BddConnection $connection;
    public String $t_name;

    public function __construct()
    {
        $this->connection =  App::getInstance()->getConnection();
        $this->t_name = T_CATEGORY;
    }

    public function findById(int $id): ?Category
    {
        $request = $this->connection->request('SELECT * FROM' . $this->t_name . 'WHERE id = :id', [
            'id' => $id
        ]);

        if (!sizeof($request)) {
            return null;
        }

        $category = new Category;
        $category->setData(array_shift($request));
        return $category;
    }


    public  function saveCategoryToJson()
    {
        //On récupère les données du JSON
        $apiManager = new ApiManager;
        $dataApi = $apiManager->getJsonFile();

        $arrCategories = [];
        $data_category = null;

        //On boucle pour récupérer les catrégories
        foreach ($dataApi as $data) {
            if (!in_array($data->category->name, $arrCategories)) {
                $data_category = $data->category->name;
                array_push($arrCategories, $data_category);
            }
        }
        $categoryToAdd = [];

        if (!empty($arrCategories)) {
            foreach ($arrCategories as $category) {
                $categoryToAdd[$category] =':'.$category;
                unset($categoryToAdd['name']);
            }
            /* implode — Rassemble les éléments d'un tableau en une chaîne */
            /* array_keys — Retourne toutes les clés ou un ensemble des clés d'un tableau */
           
            return $this->connection->request("INSERT INTO ".$this->t_name."(".implode(",", array_keys($categoryToAdd)).") VALUES (".implode(",",$categoryToAdd).")");
        }
    }

    public function getCategories()
    {

        $req = $this->connection->request('Select * FROM ' . $this->t_name . '');

        if (!sizeof($req)) {
            return [];
        }

        return $req;
    }
}
