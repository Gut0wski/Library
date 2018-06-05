<?php

namespace App\Model\bookAuthors;

use Engine\Core\Database\ActiveRecord;

class BookAuthors
{
    use ActiveRecord;

    protected $table = 'books_authors';

    public $id;

    public $book_id;

    public $author_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getBookId()
    {
        return $this->book_id;
    }

    public function setBookId($book_id)
    {
        $this->book_id = $book_id;
    }

    public function getAuthorId()
    {
        return $this->author_id;
    }

    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;
    }


}