<?php

namespace Database;

class Connector
{
    protected $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'Almaz', 'root', 'new');
    }
}