<?php


class BddConnection
{
public static function connection(){

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=digital_library;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION]);

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}
}