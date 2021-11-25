<?php

namespace App\Entity;

use App\Entity\Entity;
use DateTime;

class Book extends Entity
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
    public function setId(int $id)
    {
        $this->setDataWithKey('id',$id);
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
    public function setName(string $name)
    {
        $this->setDataWithKey('name', $name);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublication():DateTime
    {
        return $this->getDataWithKey('publication');
    }

    /**
     * @param mixed $publication
     */
    public function setPublication($publication)
    {
        $this->setDataWithKey('publication', $publication);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCover():string
    {
        return $this->getDataWithKey('cover');
    }

    /**
     * @param mixed $cover
     */
    public function setCover($cover)
    {
        $this->setDataWithKey('cover', $cover);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSummary():string
    {
        return $this->getDataWithKey('summary');
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->setDataWithKey('summary' , $summary);
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->author_id;
    }

    /**
     * @param int $author_id
     */
    public function setAuthorId(int $author_id)
    {
        $this->author_id = $author_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId(int $category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }




}