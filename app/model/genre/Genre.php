<?php

namespace App\Model\Genre;

use Engine\Core\Database\ActiveRecord;

class Genre
{
    use ActiveRecord;

    protected $table = 'genres';

    public $id;

    public $name;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}