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
        $tableBook = "CREATE TABLE book (
                  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  name VARCHAR(255) NOT NULL,
                  publication DATE NOT NULL,
                  cover VARCHAR(255),
                  summary TEXT NOT NULL ,
                  author_id INT NOT NULL,
                  category_id INT NOT NULL)";
        $bdd->exec($tableBook);

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


                $author = $book->setAuthor($bookData->author->name);
                $category = $book->setCategory($bookData->category->name);


               /* if (!$category == $book->getCategory() || !$author == $book->getAuthor()) {
                    $author_id += 1;
                    $category_id += 1;
                } else {
                    echo "La catégorie existe déjà";
                }*/
                $book->setName($bookData->name);
                $book->setPublication($bookData->publication);
                $book->setCover($bookData->cover);
                $book->setCover($bookData->cover);
                $book->setSummary($bookData->summary);

                $sth = $bdd->prepare("
                  INSERT INTO book(name, publication, cover, summary, author_id, category_id)
                  VALUES (:name,:publication,:cover,:summary,:author_id,:category_id)
                ");
                $sth->bindParam(':name', $name);
                $sth->bindParam(':publication', $publication);
                $sth->bindParam(':cover', $cover);
                $sth->bindParam(':summary', $summary);
                $sth->bindParam(':author_id', $author_id);
                $sth->bindParam(':category_id', $category_id);


                $name = $book->getName();
                $publication = $book->getPublication();
                $cover = $book->getCover();
                $summary = $book->getSummary();
                $author_id = 0;
                $category_id = 0;

                $sth->execute();

            }
        }
        catch
            (PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }


    }

}

$bookDao = new BookDao();
$bookDao->createTable();
$bookDao->addBooks();

