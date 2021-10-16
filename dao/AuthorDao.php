<?php

namespace Dao;

use BddConnection;
use PDO;
use Service\DataApi;
use Model\Author;

class AuthorDao
{


   public static function addAuthor()
    {
        //Connexion à la base de donnée
        $bdd = BddConnection::connection();
        //On récupère les données du JSON
        $dataApi = DataApi::getData();


        //On boucle pour récupérer les autheurs
        foreach ($dataApi as $author_data) {
            $author_name = $author_data->author->name;

            if (!self::authorExist($author_name)) {
                $req_add = $bdd->prepare("INSERT INTO authors(
                     name) VALUE (:name)");
                $req_add->bindParam(':name', $author_name);
                $req_add->execute();

                echo '<pre>';
                echo 'L\'autheur : '.$author_name.' à été enregistré !';
                echo '</pre>';

            } else {
                echo '<pre>';
                echo 'L\'autheur existe déjà';
                echo '</pre>';
            }
        }

    }

    public static function authorExist(string $author_name)
    {
        $bdd = BddConnection::connection();
        $req = $bdd->prepare("select count(*)  from authors where name= :author_name");
        $req->bindParam(':author_name', $author_name);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC)["count(*)"];
        return $resultat !== "0";
    }

    public static function getAuthorIdByName(string $author_name){
        $bdd = BddConnection::connection();
        $req = $bdd->prepare("select id from authors where name=:author_name");
        $req->bindParam(':author_name',  $author_name);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public static function authorsName(){
        $bdd = BddConnection::connection();
        $req = $bdd->prepare("select name from authors");
        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findAuthorNameById(int $id)
    {

        //Connexion à la base de donnée
        $bdd = BddConnection::connection();

        $req = $bdd->prepare("select name  from authors where id= :id");
        $req->bindParam(':id', $id);
        $req->execute();

        return $req->fetch(PDO::FETCH_ASSOC);
    }


}

