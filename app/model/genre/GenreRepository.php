<?php

namespace App\Model\Genre;

use Engine\Model;

class GenreRepository extends Model
{
    public function getList()
    {
        $sql = $this->queryBuilder
            ->select()
            ->from('genres')
            ->orderBy('name', 'ASC')
            ->sql();
        return $this->db->query($sql);
    }

    public function create($params)
    {
        $genre = new Genre();
        $genre->setName($params['name']);
        $id = $genre->save();
        return $id;
    }

    public function getData($id)
    {
        $genre = new Genre($id);
        return $genre->findOne();
    }

    public function update($params)
    {
        if (isset($params['genre_id'])) {
            $genre = new Genre($params['genre_id']);
            $genre->setName($params['name']);
            $genre->save();
        }
    }

    public function delete($id)
    {
        $author = new Genre($id);
        $author->delete();
    }
}