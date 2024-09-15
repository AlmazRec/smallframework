<?php

namespace App\Controllers;

use App\Models\Post;
use Database\Connector;
use Src\Views\Views;

class PostController extends Connector
{
    public function index(): null // страница с постами
    {
        $views = new Views();
        return $views->view('Post/index');
    }

    public function create(): null // возвращает форму для создания поста
    {
        $views = new Views();
        return $views->view('Post/create');
    }
    public function store(): void // обработка данных
    {
        $model = new Post();

        $data = [
            'name' => $_POST['name'],
            'content' => $_POST['content'],
        ];

        $model->create('posts', $data);
        header('location: /posts');
    }
}