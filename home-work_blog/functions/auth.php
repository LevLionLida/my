<?php

require_once __DIR__ . './../controllers/auth-controller.php';
/** @var PDO $database ... */

function user_auth(PDO $database, string $email, string $password): bool
{
    $user_duplicate = 'SELECT * FROM `user` WHERE `email`=:email AND `password`=:password '; //Проверяем наличие логина, пароля
    $stat_duplicate = $database->prepare($user_duplicate);
    $stat_duplicate->execute(
        ['email' => $email, 'password' => $password]);
    $select_email_pass = $stat_duplicate->fetch();
    list('email' => $email_bd, 'password' => $password_bd) = $select_email_pass;

    // сравниваем емаил и пароль введенный пользователем на наличие  соответствый в базе

    if ($email_bd == $email and $password_bd == $password) {  // если данные совпадают, авторизируем пользователя
        $user_auth = true;
        $_SESSION['auth'] = $user_auth;
        $_SESSION['email'] = $email;
        header('Location: ../pages/account_page.php');
    } else {                                                // если данные не совпадают то выводим ошибку
        $user_auth = false;
        $_SESSION['auth'] = $user_auth;
        set_alert('error', 'Неправильный логин или пароль!');
        header('Location: ../pages/auth_page.php');
    }
    return $user_auth;

}


function user_is_auht(): bool   // проверяем авторизовался ли пользователь
{
    return $_SESSION['auth'];
}


