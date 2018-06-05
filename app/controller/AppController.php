<?php

namespace App\Controller;

use Engine\Controller;

class AppController extends Controller
{
    public $data = array();

    public function __construct($di)
    {
        parent::__construct($di);
    }
}