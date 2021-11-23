<?php

namespace Model;

class Book
{
protected string $name;
protected  string $publication;
protected string $cover;
protected  string $summary;
protected int $author_id;
protected int $category_id;

    /**
     * @param string $name
     * @param string $publication
     * @param string $cover
     * @param string $summary
     * @param int $author_id
     * @param int $category_id
     */
    public function __construct(string $name, string $publication, string $cover, string $summary, int $author_id, int $category_id)
    {
        $this->name = $name;
        $this->publication = $publication;
        $this->cover = $cover;
        $this->summary = $summary;
        $this->author_id = $author_id;
        $this->category_id = $category_id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * @param mixed $publication
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;
    }

    /**
     * @return mixed
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * @param mixed $cover
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
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
    public function setAuthorId(int $author_id): void
    {
        $this->author_id = $author_id;
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
    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }




}