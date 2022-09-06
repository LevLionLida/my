<?php
/*
function get_database_connection(): PDO
{
    static $connection = null;

    if (null === $connection) {
        $dns = 'mysql:host=127.0.0.1;port=3306;dbname=blog;charset=utf8mb4';

        $connection = new PDO($dns, 'root', '123321',
            [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
        );
    }

    return $connection;
}

$connection=get_database_connection();
var_dump($connection);

*/
//функция соиденения с базой данных
//$connection=get_database_connection();
//var_dump($connection);