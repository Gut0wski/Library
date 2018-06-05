<?php

namespace App\Controller;

class BookController extends AppController
{
    public function listing()
    {
        \Theme::setTitle('Книги');
        $this->load->model('Book');
        $this->data['books'] = $this->model->book->getList();

        $this->view->render('book/list', $this->data);
    }

    public function create()
    {
        \Theme::setTitle('Добавление книги');
        $this->load->model('Genre');
        $this->data['genres'] = $this->model->genre->getList();
        $this->load->model('Author');
        $this->data['authors'] = $this->model->author->getList();
        $this->view->render('book/create', $this->data);
    }

    public function edit($id)
    {
        \Theme::setTitle('Редактирование книги');
        $this->load->model('Book');
        $this->data['book'] = $this->model->book->getData($id);
        $this->load->model('Genre');
        $this->data['genres'] = $this->model->genre->getList();
        $this->load->model('Author');
        $this->data['authors'] = $this->model->author->getList();
        $this->load->model('BookAuthors');
        $this->data['bookAuthors'] = $this->model->bookAuthors->getBookAuthors($id);
        $this->view->render('book/edit', $this->data);
    }

    public function add()
    {
        $params = $this->request->post;
        $this->load->model('Book');
        if (isset($params['genre']) && isset($params['name']) && isset($params['authors'])) {
            $id = $this->model->book->create($params);
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/book/edit/' . $id);
        }
    }

    public function update()
    {
        $params = $this->request->post;
        $this->load->model('Book');
        if (isset($params['genre']) && isset($params['name']) && isset($params['authors'])) {
            $this->model->book->update($params);
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/books/');
        }
    }

    public function delete($id)
    {
        $this->load->model('Book');
        $this->model->book->delete($id);
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/books/');
    }
}