<?php

namespace App\Model\Author;

use Engine\Model;

class AuthorRepository extends Model
{
    public function getList()
    {
        $sql = $this->queryBuilder
            ->select()
            ->from('authors')
            ->orderBy('first_name', 'ASC')
            ->sql();
        return $this->db->query($sql);
    }

    public function create($params)
    {
        $author = new Author();
        $author->setLastName($params['last_name']);
        $author->setFirstName($params['first_name']);
        $id = $author->save();
        return $id;
    }

    public function getData($id)
    {
        $author = new Author($id);
        return $author->findOne();
    }

    public function update($params)
    {
        if (isset($params['author_id'])) {
            $author = new Author($params['author_id']);
            $author->setLastName($params['last_name']);
            $author->setFirstName($params['first_name']);
            $author->save();
        }
    }

    public function delete($id)
    {
        $author = new Author($id);
        $author->delete();
    }
}