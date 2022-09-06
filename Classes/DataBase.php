<?php

namespace Classes;

use PDO;

class DataBase
{
    protected static PDO|null $pdo = null;

    public static function pdo(): PDO
    {
        if (is_null(static::$pdo)) {
            static::$pdo = new PDO(
                'mysql:host=127.0.0.1;dbname=blog',
                'root',
                '123321',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        }
        return static::$pdo;
    }
}
