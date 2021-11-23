<?php 

namespace App\Manager;

class ApiManager
{
public function getJsonFile()
{
    $jsonFile ='src/Api/books.json';
    $jsonDatas = file_get_contents($jsonFile);
    $datas = json_decode($jsonDatas);

    return $datas;

}

public function addJsonDatasToBdd()
{
    $datas = $this->getJsonFile();

    foreach ($datas as $data)
    {
        var_dump($data->name);
    }
}

}