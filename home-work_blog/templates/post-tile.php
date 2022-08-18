<?php
session_start();
$id = session_id();
print("Session Id: ".$id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Index</title>
</head>
<body>

<?php //require __DIR__ . '/templates/alerts.php';




if ((isset($_COOKIE['auth'])) || (isset($_SESSION['auth']))) { ?>
    <p>Добро пожаловать, <?php echo $_COOKIE['email']; ?> .</p>
    <p>Это Ваш супер секрет 2</p>
    <form action='logout.php' method='post'>
        <input type='submit' value='Выход'>
    </form>
    <?php
}

else{
    echo "не активная сессия или кука мертва";?>
    <p>Сначала войдите</p>
    <a href='logout.php'>Вход</a>
    <?php
}
?>

</body>
</html>
