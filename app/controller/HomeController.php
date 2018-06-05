<?php

namespace App\Controller;

class HomeController extends AppController
{
    public function index()
    {
        \Theme::setTitle('Библиотека');
        $this->view->render('index');
    }
}