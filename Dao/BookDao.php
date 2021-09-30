<?php

namespace Dao;

use BddConnection;
use DateTime;
use Exception;
use PDO;
use Service\DataApi;


class BookDao
{

    /**
     * @throws Exception
     */
    public static function addBooks()
    {
        //Connexion à la base de donnée
        $bdd = BddConnection::connection();

        //On récupère les données du JSON
        $dataApi = DataApi::getData();


        foreach ($dataApi as $bookData) {

            $book_name = $bookData->name;
            $publication = $bookData->publication;
            $cover = $bookData->cover;
            $summary = $bookData->summary;
            $author = $bookData->author->name;
            $author_id = self::findAuthorById($author);
            $category = $bookData->category->name;
            $category_id = self::findCategoryById($category);

            //Si le livre n'existe pas et que l'autheur et la  catégorie existent on ajoute dans la base de donnée
            if (!self::bookExist($book_name) && self::findAuthorById($author) && self::findCategoryById($category)) {

                $req_add = $bdd->prepare("
                  INSERT INTO books(name, publication, cover, summary,author_id,category_id )
                  VALUES (:name,:publication,:cover,:summary,:author_id,:category_id)
                ");
                $req_add->bindParam(':name', $book_name);
                $req_add->bindParam(':publication', $publication);
                $req_add->bindParam(':cover', $cover);
                $req_add->bindParam(':summary', $summary);
                $req_add->bindParam(':author_id', $author_id);
                $req_add->bindParam(':category_id', $category_id);

                $req_add->execute();

               echo "<pre>";
               echo "livre ajouté dans la table";
               echo "</pre>";
            } else {
                echo 'Le livre existe déjà';
            }

        }

    }

    public static function findAuthorById(string $author)
    {

        //Connexion à la base de donnée
        $bdd = BddConnection::connection();

        $req = $bdd->prepare("select id  from authors where name= :author");
        $req->bindParam(':author', $author);
        $req->execute();

        return $req->fetch(PDO::FETCH_ASSOC)["id"];
    }

    public static function findCategoryById(string $category)
    {

        //Connexion à la base de donnée
        $bdd = BddConnection::connection();

        $req = $bdd->prepare("select id  from categories where name= :category");
        $req->bindParam(':category', $category);
        $req->execute();

        return $req->fetch(PDO::FETCH_ASSOC)["id"];
    }

    public static function bookExist(string $book_name)
    {
        $bdd = BddConnection::connection();
        $req = $bdd->prepare("select count(*)  from books where name= :book_name");
        $req->bindParam(':book_name', $book_name);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC)["count(*)"];
        return $resultat !== "0";
    }

}


