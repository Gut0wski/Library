<?php

namespace App\Model\Book;

use Engine\Core\Database\ActiveRecord;

class Book
{
    use ActiveRecord;

    protected $table = 'books';

    public $id;

    public $genre_id;

    public $name;

    public $year;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getGenreId()
    {
        return $this->genre_id;
    }

    public function setGenreId($genre_id)
    {
        $this->genre_id = $genre_id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
}