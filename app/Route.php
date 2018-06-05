<?php

$this->router->add('home', '/', 'HomeController:index');

$this->router->add('books', '/books/', 'BookController:listing');
$this->router->add('book-create', '/book/create/', 'BookController:create');
$this->router->add('book-add', '/book/add/', 'BookController:add', 'POST');
$this->router->add('book-edit', '/book/edit/(id:int)', 'BookController:edit');
$this->router->add('book-update', '/book/update/', 'BookController:update', 'POST');
$this->router->add('book-delete', '/book/delete/(id:int)', 'BookController:delete');

$this->router->add('authors', '/authors/', 'AuthorController:listing');
$this->router->add('author-create', '/author/create/', 'AuthorController:create');
$this->router->add('author-add', '/author/add/', 'AuthorController:add', 'POST');
$this->router->add('author-edit', '/author/edit/(id:int)', 'AuthorController:edit');
$this->router->add('author-update', '/author/update/', 'AuthorController:update', 'POST');
$this->router->add('author-delete', '/author/delete/(id:int)', 'AuthorController:delete');

$this->router->add('genres', '/genres/', 'GenreController:listing');
$this->router->add('genre-create', '/genre/create/', 'GenreController:create');
$this->router->add('genre-add', '/genre/add/', 'GenreController:add', 'POST');
$this->router->add('genre-edit', '/genre/edit/(id:int)', 'GenreController:edit');
$this->router->add('genre-update', '/genre/update/', 'GenreController:update', 'POST');
$this->router->add('genre-delete', '/genre/delete/(id:int)', 'GenreController:delete');
