<?php
namespace App\MySql;


class BddConnection
{
    
protected  $pdo;    

    public function __construct($host, $user,$password, $dbname)
    {
      $this->pdo =  new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
      $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

}

public function request($request, $datas = [], $fetch = true)
{
/* On prépare la requête */
$req = $this->pdo->prepare($request);

/* On ajoute les données et sa valaeur */
foreach($datas as $data => $value)
{
    $req->bindValue(":". $data, $value);
}

/* Puis on execute la requête */
$req->execute();

/* Si il ya des données on retourne un tableau contenant toutes les lignes du jeu d'enregistrement */
if($fetch)
{
    $res = $req->fetchAll(\PDO::FETCH_ASSOC);
}

/* Sinon on renvoie une erreur */
else
{
    $res = $req->errorCode();
}

return $res;
}
}
