<?php

require_once __DIR__ . './../controllers/registration-controller.php';
/** @var PDO $database ... */

function user_register( $database, $data): bool
{

    list('email' => $email, 'password' => $password, 'name' => $name) = $data;

    $user_duplicate = 'SELECT * FROM `user` WHERE `email`=:email ';// сравниваем емаил введенный пользователем на наличие копий в базе
    $stat_duplicate = $database->prepare($user_duplicate);
    $stat_duplicate->execute(['email' => $email]);
    $select_email = $stat_duplicate->fetch();

    if ($select_email == 0) {
        $users_reg = 'INSERT INTO `user` (`email`, `password`, `user_name`)
VALUES (?, ?, ?)';
        $stat = $database->prepare($users_reg);
        $stat->execute([
                $email,
                $password,
                $name,]
        );
        $duplicate_email = 1;
    } else {
        $duplicate_email = 0;
    }
    return $duplicate_email;
}
