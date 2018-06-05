<?php

namespace App\Model\bookAuthors;

use Engine\Model;

class BookAuthorsRepository extends Model
{
    public function getBookAuthors($idBook)
    {
        $sql = $this->queryBuilder
            ->select('id, author_id')
            ->from('books_authors')
            ->where('book_id', $idBook)
            ->sql();
        return $this->db->query($sql, $this->queryBuilder->values);
    }
}