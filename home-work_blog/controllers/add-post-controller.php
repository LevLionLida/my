<?php
session_start();
require_once __DIR__ . './../functions/database.php';

var_dump($_POST);


if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    exit('Method Not Allowed.');
}
$type = $_POST['type'] ?? null;
$name = $_POST['name'] ?? null;
$image = $_FILES['image'] ?? null;
$text = $_POST['text'] ?? null;
$user_id=$_SESSION['user_id'];

if (null === $name || null === $image || null === $text) {
    exit('Name, image and price are required.');
}

$uploadFilePath = $_FILES['image']['name'];
$uploadFileLocalPath = dirname(__DIR__). '/storage/'. $_FILES['image'] ['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $uploadFilePath);

$connection = get_database_connection();

$statement = $connection->prepare(
    'INSERT INTO `post` (`user_id`,`type`, `name_post`, `image_post`, `text_post`)
            VALUES (:user_id, :type, :name_post, :image_post, :text_post)'
);

$statement->execute([
    'user_id'=>$user_id,
    'type'=>$type,
    'name_post' => $name,
    'image_post' => $uploadFilePath,
    'text_post' => $text
]);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
