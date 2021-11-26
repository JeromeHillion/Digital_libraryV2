<?php

namespace App\MySql;

use App\MySql\BddConnection;
require_once '../Mysql/Configuration.php';
class App
{

    private $connection;
    private static $_instance;

    /**
     * Constructeur de la classe
     *
     * @param void
     * @return void
     */
    private function __construct()
    {
    }

    /**
     * Méthode qui crée l'unique instance de la classe
     * si elle n'existe pas encore puis la retourne.
     */
    public static function getInstance()
    {

        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }

        return self::$_instance;
    }

    public function getConnection()
    {
        /* Si la connection n'existe pas on la créer */
        if (!$this->connection)
        {
            $this->connection = new BddConnection(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }

        /* Puis on la retourne */
        return $this->connection;
    }
}
