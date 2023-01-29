<?php

namespace App\models;

class Model
{
    protected \PDO $connect;

    public function __construct()
    {
        $this->connect = Connection::connect();
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $all = $this->connect->query($sql);
        $all->execute();

        return $all->fetchAll();
    }
}
