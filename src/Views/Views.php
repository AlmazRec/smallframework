<?php

namespace Src\Views;

class Views
{
    public function view($view)
    {
        require_once 'app/views/' . $view . '.php';
    }
}