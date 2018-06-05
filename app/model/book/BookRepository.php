<?php

namespace App\Model\Book;

use App\Model\bookAuthors\BookAuthors;
use App\Model\bookAuthors\BookAuthorsRepository;
use Engine\Model;

class BookRepository extends Model
{
    public function getList()
    {
        $sql = $this->queryBuilder
            ->select('books.id, genres.name as genre, GROUP_CONCAT(concat(authors.first_name, \' \', authors.last_name) SEPARATOR \', \') as author, books.name, books.year')
            ->from('books')
            ->innerJoin('genres', 'books.genre_id = genres.id')
            ->innerJoin('books_authors', 'books_authors.book_id = books.id')
            ->innerJoin('authors', 'authors.id = books_authors.author_id')
            ->groupBy('genres.name, books.name, books.year')
            ->orderBy('books.name', 'ASC')
            ->sql();
        return $this->db->query($sql);
    }

    public function create($params)
    {
        $book = new Book();
        $book->setGenreId($params['genre']);
        $book->setName($params['name']);
        $book->setYear($params['year']);
        $id = $book->save();
        foreach ($params['authors'] as $author) {
            $book_author = new BookAuthors();
            $book_author->setBookId($id);
            $book_author->setAuthorId($author);
            $book_author->save();
        }
        return $id;
    }

    public function getData($id)
    {
        $author = new Book($id);
        return $author->findOne();
    }

    public function update($params)
    {
        if (isset($params['book_id'])) {
            $book_id = $params['book_id'];
            $book = new Book($book_id);
            $book->setGenreId($params['genre']);
            $book->setName($params['name']);
            $book->setYear($params['year']);
            $book->save();
            $authors_new = $params['authors'];
            $authors_old = array();
            $book_authors = (new BookAuthorsRepository($this->di))->getBookAuthors($book_id);
            foreach ($book_authors as $authors) {
                $key = array_search($authors->author_id, $authors_new);
                if ($key !== false) {
                    unset($authors_new[$key]);
                } else {
                    $authors_old[] = $authors->id;
                }
            }
            foreach ($authors_old as $id) {
                $book_author = new BookAuthors($id);
                $book_author->delete();
            }
            foreach ($authors_new as $id) {
                $book_author = new BookAuthors();
                $book_author->setBookId($book_id);
                $book_author->setAuthorId($id);
                $book_author->save();
            }
        }
    }

    public function delete($id)
    {
        $authors = new BookAuthors();
        $authors->deleteAll('book_id', $id);
        $book = new Book($id);
        $book->delete();
    }
}