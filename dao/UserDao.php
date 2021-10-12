<?php

namespace Dao;

use BddConnection;


class UserDao
{
public static function addUser(){

    $bdd =BddConnection::connection();
    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dateCreated = date('Y-m-d');
    $status = "Utilisateur";

    if (isset($firstname) && isset($username) && isset($email) && isset($password)){
     if(self::validateName($firstname) && self::validateName($username) && self::validateEmail($email)){
         $encryptPassword= self::encryptePassword($password);
         $req_add = $bdd->prepare("
                  INSERT INTO users(firstname, username, email,date_created, password,status )
                  VALUES (:firstname,:username,:email,:date_created,:password,:status)
                ");
         $req_add->bindParam(':firstname', $firstname);
         $req_add->bindParam(':username', $username);
         $req_add->bindParam(':email', $email);
         $req_add->bindParam(':date_created', $dateCreated);
         $req_add->bindParam(':password', $encryptPassword);
         $req_add->bindParam(':status', $status);

         $req_add->execute();

         echo "<pre>";
         echo "L'utilisateur à bien été ajouté !";
         echo "</pre>";
     }
    }

    else{
        echo "Erreur !";
    }
}

static function validateName($name): bool
{
            if (preg_match('/^[\wýþÿÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûü-]+$/', $name)){
                return true;
            }

            else{
               echo "Le nom est invalide";
               return false;
            }
}

static function validateEmail($email): bool
{
    if (preg_match('/^\w+(.\w+)?@\w+.\w{1,3}$/', $email)){
        return true;
    }
    else{
        echo "Le mail est valide !";
        return false;
    }
}

static function encryptePassword($password){
    return password_hash($password, PASSWORD_BCRYPT);
}
}