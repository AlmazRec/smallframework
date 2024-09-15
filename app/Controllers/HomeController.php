<?php

namespace App\Controllers;
use Src\Views\Views;

class HomeController
{
    public function index()
    {
        $views = new Views();
        return $views->view('home');
    }
}