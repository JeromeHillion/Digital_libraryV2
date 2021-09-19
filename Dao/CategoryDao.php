<?php
include("../Service/DataApi.php");
include("../Model/Category.php");

class CategoryDao
{
    public function createTable()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=digital_library;charset=utf8', 'root', '');
            echo "Connexion à la base de donnée réussi !";
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $table_category = "CREATE TABLE category (
                  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  name VARCHAR(255) NOT NULL
                 )";
        $bdd->exec($table_category);

    }


    public function addCategory()
    {


        try {
            $bdd = new PDO('mysql:host=localhost;dbname=digital_library;charset=utf8', 'root', '');
            echo "Connexion à la base de donnée réussi !";

            $dataApi = new DataApi();
            $data = $dataApi->getData();



            /*exit();*/
            foreach ($data as $category_data) {
                $category = new Category();
                $category->setName($category_data->category->name);
                $category_name = $category->getName();
                $req_select = $bdd->prepare("SELECT  name FROM category");
                $req_select->execute();
                $category_data_bdd = $req_select->fetchAll(PDO::FETCH_ASSOC);
                foreach ($category_data_bdd as $data_name_bdd) {
                    $category_data_name_bdd=$data_name_bdd['name'];
                    echo '<pre>';
                    var_dump($category_data_name_bdd);
                    echo '</pre>';
                }
                if ($category_name ===  $category_data_name_bdd) {
                    var_dump($category_data_name_bdd);
                    echo 'La catégorie existe déjà';
                } else {
                    $req_add = $bdd->prepare("INSERT INTO category(
                     name) VALUE (:name)");
                    $req_add->bindParam(':name', $category_name);
                    $req_add->execute();

                    echo '<pre>';
                    echo "Entrée ajoutée dans la table";
                    echo '</pre>';
                    echo '<pre>';

                    echo '</pre>';
                }



                /*echo '<pre>';
                var_dump($category_data->category->name);
                echo '</pre>';*/
            }

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}

$categoryDao = new CategoryDao();
$categoryDao->addCategory();
/*$categoryDao->createTable();*/