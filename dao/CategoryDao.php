<?php

namespace Dao;

use BddConnection;
use PDO;
use Service\DataApi;
use Model\Category;




class CategoryDao
{

    public static function addCategories()
    {

        //Connexion à la base de donnée
        $bdd = BddConnection::connection();

        //On récupère les données du JSON
        $dataApi = DataApi::getData();

        //On boucle pour récupérer les catrégories
        foreach ($dataApi as $category_data) {
            $category_name = $category_data->category->name;

            //Si elle n'existe pas on l'ajoute dans la base de donnée
            if (!self::categoryExist($category_name)) {
                $req_add = $bdd->prepare("INSERT INTO categories(
                     name) VALUE (:name)");
                $req_add->bindParam(':name', $category_name);
                $req_add->execute();

            }
            else{
                echo 'La catégorie existe déjà';
            }
        }
    }

    public static function categoryExist(string $category_name)
    {
        $bdd = BddConnection::connection();
        $req = $bdd->prepare("select count(*)  from categories where name= :category_name");
        $req->bindParam(':category_name', $category_name);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC)["count(*)"];
        return $resultat !== "0";
    }

    public static function getCategoryIdByName(string $category_name){
        $bdd = BddConnection::connection();
        $req = $bdd->prepare("select id from categories where name=:category_name");
        $req->bindParam(':category_name',  $category_name);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }



    public static function findCategoryNameById(int $id)
    {

        //Connexion à la base de donnée
        $bdd = BddConnection::connection();

        $req = $bdd->prepare("select name  from categories where id= :id");
        $req->bindParam(':id', $id);
        $req->execute();

        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public static function categoriesName(){
        $bdd = BddConnection::connection();
        $req = $bdd->prepare("select name from categories");
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

}
