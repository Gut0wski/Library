<?php

namespace App\Controller;

class ErrorController extends AppController
{
    public function page404()
    {
        \Theme::setTitle('Ошибка');
        echo '404';
    }
}