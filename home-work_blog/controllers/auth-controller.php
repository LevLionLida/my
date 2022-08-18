<?php

session_start();
require_once __DIR__ . '/../functions/alerts.php';
require_once __DIR__ . '/../functions/user.php';
require_once __DIR__ . '/../functions/auth.php';
//require_once __DIR__ . '/../functions/database.php';

/** @var PDO $database ... */
// 1. Проверить корректность запроса

if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    set_alert('error', 'Method not allowed!');
    header('Location: ../pages/auth_page.php');
    exit;
}
// 2. Проверить данные

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    set_alert('error', 'E-mail and password are required!');
    header('Location: ../pages/auth_page.php');
    exit;
}

 $email = trim($_POST['email']);
 $password = md5(trim($_POST['password']));
// 3. Сравниваем данные пользователя добавляем, добавляем сессию в файле /../functions/auth_page.php';

$database= get_database_connection();

$user_auth = user_auth($database, $email, $password);

$user_is_auth = user_is_auht();
//4. добавляем куки

$select_id = user_select_id($email); // выборка с из базы ид пользователя

if ($user_is_auth == true) {
    $_SESSION['email'] = $email;
   $_SESSION['user_id'] = $select_id;
    setcookie("auth", $user_auth, time() + 100*100*23, "/");
    setcookie("user_id", $select_id, time() + 100*100*23, "/");
}


?>
