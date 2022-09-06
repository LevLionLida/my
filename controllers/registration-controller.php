<?php
session_start();

require_once __DIR__ . '/../functions/database.php';

require_once __DIR__ . '/../functions/registration.php';



//var_dump( $_POST);

// 1. Проверить корректность запроса

if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    set_alert('error', 'Method not allowed!');
    header('Location: ../registration_page.php');
    exit;
}
// 2. Проверить данные

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    set_alert('error', 'E-mail and password are required!');
    header('Location: ../registration_page.php');

    exit;
}
$data = [
    'email' => trim($_POST['email']),
    'password' => md5(trim($_POST['password'])),
    'name' => trim($_POST['name'])];

if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    set_alert('error', 'Invalid e-mail address!');
    header('Location: ../registration_page.php');
    exit;
}

$database= DataBase::pdo();
// функция проверки дублей и добавления в базу пользователя
$user_register = user_register($database, $data);
var_dump($user_register);

//register the user if he is not registered yet
if ($user_register == false) {
    set_alert('error', 'Логин уже зарегистрирован');
    header('Location: ../registration_page.php');
    exit;

} //if the user is already registered, we display an error

elseif ($user_register == true) {
    header('Location: ../pages/auth_page.php');
    exit;
}

$_SESSION['user_name'] = $data['name'];

