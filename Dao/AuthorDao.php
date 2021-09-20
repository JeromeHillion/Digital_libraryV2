<?php
include("../Service/DataApi.php");
include("../Model/Author.php");
class AuthorDao
{
    public function createTable()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=digital_library;charset=utf8', 'root', '');
            echo "Connexion à la base de donnée réussi !";
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $tableAuthor = "CREATE TABLE author (
                  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  name VARCHAR(255) NOT NULL)";
        $bdd->exec($tableAuthor);

    }
    
    function addAuthor(){
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=digital_library;charset=utf8', 'root', '');
            echo "Connexion à la base de donnée réussi !";

            $dataApi = new DataApi();
            $data = $dataApi->getData();



            /*exit();*/
            foreach ($data as $author_data) {
                $author = new Author();
                $author->setName($author_data->author->name);
                $authorName = $author->getName();
                $req_select = $bdd->prepare("SELECT  name FROM author");
                $req_select->execute();
                $author_data_bdd = $req_select->fetchAll(PDO::FETCH_ASSOC);
                foreach ($author_data_bdd as $data_name_bdd) {
                    $author_data_name_bdd=$data_name_bdd['name'];
                    echo '<pre>';
                    var_dump($author_data_name_bdd);
                    echo '</pre>';

                }



                if ($authorName =  $author_data_name_bdd) {

                    echo 'L\'autheur existe déjà';
                } else {
                    $req_add = $bdd->prepare("INSERT INTO author(
                     name) VALUE (:name)");
                    $req_add->bindParam(':name', $authorName);
                    $req_add->execute();

                    echo '<pre>';
                    echo "Entrée ajoutée dans la table";
                    echo '</pre>';
                    echo '<pre>';

                    echo '</pre>';
                }


            }

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}

$authorDao = new AuthorDao();
/*$authorDao->createTable();*/
$authorDao->addAuthor();