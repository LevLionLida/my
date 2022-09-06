<?php

session_start();
spl_autoload_register(
    function($class) {
        include $_SERVER['DOCUMENT_ROOT'] . '/' . str_replace('\\', '/', $class) . '.php';
    }
);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Auth</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="../style/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../style/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<div class="container">
    <div class="row">
        <?php require __DIR__ . './../templates/alerts.php'; ?>
    </div>

    <?php
    if ((isset($_COOKIE['auth'])) and (isset($_SESSION['auth']))) { ?>

        <?php   header('Location: ../pages/account_page.php'); ?>

        <?php
    } else { ?>
        <div class="row">
            <main class="form-signin w-100 m-auto">
                <form action="../controllers/auth-controller.php" method="post">
                    <img class="mb-4" src="../style/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите</h1>

                    <div class="form-floating">
                        <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">
                        <label for="email">Адрес электронной почты</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" id="password" class="form-control"
                               placeholder="Password">
                        <label for="password">Пароль</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Запомнить меня
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-secondary" type="submit">Войти</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
                </form>
            </main>
        </div>
    <?php }
    ?>

</div>
</body>
</html>
