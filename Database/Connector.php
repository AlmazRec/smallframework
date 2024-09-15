<?php

namespace Database;

// Коннектор к базе, пока-что только mysqli
class Connector
{
    protected $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'Almaz', 'root', 'new');
    }
}