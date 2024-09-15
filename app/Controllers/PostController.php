<?php

namespace App\Controllers;

use App\Models\Post;
use Database\Connector;
use Src\Views\Views;

class PostController extends Connector
{
    public function index(): null
    {
        $views = new Views();
        return $views->view('Post/index');
    }

    public function create(): null
    {
        $views = new Views();
        return $views->view('Post/create');
    }
    public function store(): void
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