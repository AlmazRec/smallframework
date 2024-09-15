<?php

namespace App\Controllers;
use Src\Views\Views;

// велком ту ферст контроллер

class HomeController
{
    public function index()
    {
        $views = new Views();
        return $views->view('home');
    }
}