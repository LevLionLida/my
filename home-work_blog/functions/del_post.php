<?php

session_start();
require_once __DIR__ . './../functions/database.php';
$post_id = $_GET['id'];

$connection = get_database_connection();
$statement = $connection->prepare(
    'DELETE FROM `post` WHERE `post_id`=:post_id'
);
$statement->execute(['post_id' => $post_id]);

header('Location: ' . $_SERVER['HTTP_REFERER']);
return $statement->fetchAll();
