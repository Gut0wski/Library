<?php

namespace App\Controller;

class AuthorController extends AppController
{
    public function listing()
    {
        \Theme::setTitle('Авторы');
        $this->load->model('Author');
        $this->data['authors'] = $this->model->author->getList();
        $this->view->render('author/list', $this->data);
    }

    public function create()
    {
        \Theme::setTitle('Добавление автора');
        $this->view->render('author/create');
    }

    public function edit($id)
    {
        \Theme::setTitle('Редактирование автора');
        $this->load->model('Author');
        $this->data['author'] = $this->model->author->getData($id);
        $this->view->render('author/edit', $this->data);
    }

    public function add()
    {
        $this->load->model('Author');
        $params = $this->request->post;
        if (isset($params['last_name']) && isset($params['first_name'])) {
            $id = $this->model->author->create($params);
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/author/edit/' . $id);
        }
    }

    public function update()
    {
        $params = $this->request->post;
        $this->load->model('Author');
        if (isset($params['last_name']) && isset($params['first_name'])) {
            $this->model->author->update($params);
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/authors/');
        }
    }

    public function delete($id)
    {
        $this->load->model('Author');
        $this->model->author->delete($id);
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/authors/');
    }
}