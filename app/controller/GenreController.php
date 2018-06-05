<?php

namespace App\Controller;

class GenreController extends AppController
{
    public function listing()
    {
        \Theme::setTitle('Жанры');
        $this->load->model('Genre');
        $this->data['genres'] = $this->model->genre->getList();
        $this->view->render('genre/list', $this->data);
    }

    public function create()
    {
        \Theme::setTitle('Добавление жанра');
        $this->view->render('genre/create');
    }

    public function edit($id)
    {
        \Theme::setTitle('Редактирование жанра');
        $this->load->model('Genre');
        $this->data['genre'] = $this->model->genre->getData($id);
        $this->view->render('genre/edit', $this->data);
    }

    public function add()
    {
        $this->load->model('Genre');
        $params = $this->request->post;
        if (isset($params['name'])) {
            $id = $this->model->genre->create($params);
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/genre/edit/' . $id);
        }
    }

    public function update()
    {
        $params = $this->request->post;
        $this->load->model('Genre');
        if (isset($params['name'])) {
            $this->model->genre->update($params);
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/genres/');
        }
    }

    public function delete($id)
    {
        $this->load->model('Genre');
        $this->model->genre->delete($id);
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/genres/');
    }
}