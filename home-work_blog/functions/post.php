<?php

require_once  'database.php';

function get_post ( ): array
{
    $connection = get_database_connection();

    $statement = $connection->prepare(
        'SELECT * FROM `post` LIMIT :offset, :limit'
    );


    return $statement->fetchAll();
}

$post= get_post();
var_dump($post);
/*
function count_products(): int
{
    $connection = get_database_connection();

    $statement = $connection->prepare(
        'SELECT COUNT(*) AS products_count FROM `post`'
    );

    $statement->execute();

    return (int) $statement->fetch()['products_count'];
}

function card_view($id)
{
    $connection = get_database_connection();
    $statement = $connection->prepare(
        'SELECT * FROM `post` WHERE `id`=:id'
    );
    $statement->execute(['id' => $id]);
    return $statement->fetchAll();
} //находим в базе данный ид и соответствеющте ему данные
*/