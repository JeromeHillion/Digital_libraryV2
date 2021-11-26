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
        $this->connection = App::getInstance()->getConnection();
        $this->t_name = T_CATEGORY;
    }


    public static function save(Category $category)
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
        var_dump($arrCategories);
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
