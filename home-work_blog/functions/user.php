<?php
require 'database.php';
$email=$_SESSION['email'];
function user_select_id ( $email)
{
    $database = get_database_connection();
    $user_duplicate = 'SELECT * FROM `user` WHERE `email`=:email ';// сравниваем емаил введенный пользователем на наличие копий в базе
    $stat_duplicate = $database->prepare($user_duplicate);
    $stat_duplicate->execute(['email' => $email]);
    $select_id = $stat_duplicate->fetch();
    list("user_id"=>$user_id )=$select_id;
    return $user_id;
}

//функция выборки id пользователя из базы
