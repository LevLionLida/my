<?php
session_start();
/*
try{
    $user_id = $_SESSION['user_id'];
}
catch (Exception $e) {
    echo $e->getMessage();
}
*/


if (!isset($_SESSION['user_id'])) {
    try {
        throw new Exception ("Error");
    } catch (Exception $e) {
        $e->getMessage();
    }
} else {
    $user_id = $_SESSION['user_id'];

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Blog </title>

    <link href="../style/blog.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

    <link href="../style/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style/css.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="../style/css.css" rel="stylesheet">

</head>
<html>

<body


<div class="container">
    <?php require_once __DIR__ . './../templates/header.php'; ?>
    <div class="row ">
        <?php
        if ((isset($_COOKIE['auth'])) and (isset($_SESSION['auth']))) { ?>

            <?php require_once './../templates/account-tile.php';// подключение постов активного пользователя ?>

            <?php require_once './../templates/account_posts.php';// подключение постов активного пользователя ?>

            <?php
        } else {
            echo "Нажмите для входа"; ?>
                <div class="col">
            <a class=" btn btn-secondary" href='auth_page.php' role="button "  >Вход </a>

                </div>
            <?php
        }
        ?>
    </div>
    <?php require_once __DIR__ . './../templates/footer.php'; ?>
</div>



</body>
</html>
