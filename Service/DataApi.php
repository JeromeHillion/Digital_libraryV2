<?php

namespace Service;

use ArrayObject;

class DataApi
{

  public static  function getData()
    {

        //On indique le chemin de notre fichier JSON avec les livres
        $json = json_decode(file_get_contents("./Api/books.json"));

        $array = new ArrayObject([]);

        foreach ($json as $data) {
            //On ajoute les données au tableau
            $array->append($data);

        }
        return $array;
    }

}
