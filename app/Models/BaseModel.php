<?php

namespace App\Models;

use Database\Connector;


// Родитель всех последующих моделей
abstract class BaseModel extends Connector
{

    public function all($table): array // берет все из таблицы
    {
        $sql = "SELECT * FROM $table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all();
    }
    public function find($table, $id): array // ищет запись по ID
    {
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = $this->conn->prepare($sql);


        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all();
    }

    public function create($table, $data): false|int|string // добавляет данные в таблицу
    {
        $fields = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $table ($fields) VALUES ($placeholders)";

        $stmt = $this->conn->prepare($sql);

        $types = str_repeat('s', count($data));

        $stmt->bind_param($types, ...array_values($data));

        $result = $stmt->execute();

        if ($result) {
            return $this->conn->insert_id;
        } else {
            return false;
        }
    }

}