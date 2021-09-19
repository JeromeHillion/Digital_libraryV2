<?php
include("../Service/DataApi.php");
include("../Model/Book.php");

/*$books = new DataApi();*/


class BookDao
{
    public function createTable()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=digital_library;charset=utf8', 'root', '');
            echo "Connexion à la base de donnée réussi !";
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $table_book = "CREATE TABLE book (
                  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  name VARCHAR(255) NOT NULL,
                  publication DATE NOT NULL,
                  cover VARCHAR(255),
                  summary TEXT NOT NULL ,
                  author_id INT NOT NULL,
                  category_id INT NOT NULL)";
        $bdd->exec($table_book);

    }

    public function addBooks()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=digital_library;charset=utf8', 'root', '');
            echo "Connexion à la base de donnée réussi !";

            $dataApi = new DataApi();
            $data = $dataApi->getData();

            foreach ($data as $bookData) {
                $book = new Book();


                $book->setName($bookData->name);
                $book->setPublication($bookData->publication);
                $book->setCover($bookData->cover);
                $book->setCover($bookData->cover);
                $book->setSummary($bookData->summary);
                /*exit();*/
                exit();
                $req_add = $bdd->prepare("
                  INSERT INTO book(name, publication, cover, summary, author_id, category_id)
                  VALUES (:name,:publication,:cover,:summary,:author_id,:category_id)
                ");
                $req_add->bindParam(':name', $name);
                $req_add->bindParam(':publication', $publication);
                $req_add->bindParam(':cover', $cover);
                $req_add->bindParam(':summary', $summary);
                $req_add->bindParam(':author_id', $author_id);
                $req_add->bindParam(':category_id', $category_id);


                $name = $book->getName();
                $publication = $book->getPublication();
                $cover = $book->getCover();
                $summary = $book->getSummary();


                $req_add->execute();

            }
        } catch
        (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }


    }

}

$bookDao = new BookDao();
/*$bookDao->createTable();*/
$bookDao->addBooks();

