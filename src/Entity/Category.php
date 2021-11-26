<?php


namespace App\Entity;

use App\Entity\Entity;

class Category extends Entity
{
       
    /**
     * getId
     *
     * @return int
     */
    public function getId():int
    {
        return $this->getDataWithKey('id');
    }
    
    /**
     * setId
     *
     * @param  mixed $id
     * @return void
     */
    public function setId(int $id):Category
    {
        $this->setDataWithKey('id', $id);
        return $this;
    }
  
    /**
     * @return mixed
     */
    public function getName():string
    {
        return $this->getDataWithKey('name');
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name):Category
    {
        $this->setDataWithKey('name', $name);
        return $this;
    }

}