<?php

namespace App\models;

use PDO;

class Connection
{
    public static function connect(): PDO
    {
        $pdo = new PDO("pgsql:host=slim_docker_db;port=5432;dbname=slim_db", 'postgres', '123456');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        return $pdo;
    }
}
