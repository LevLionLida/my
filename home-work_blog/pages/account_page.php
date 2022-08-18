<?php
session_start();

$user_id = $_SESSION['user_id'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Account page</title>


</head>
<body>
<?php require_once __DIR__ . './../templates/header.php'; ?>
<div class="container">
    <div class="row ">
    <?php
    if ((isset($_COOKIE['auth'])) and (isset($_SESSION['auth']))) { ?>
        <div class="row  mt-4 justify-content-center ">
            <div class="col-5 ">
                <h4 class="">Добро пожаловать, <?php echo $_SESSION['email']; ?> .</h4>
            </div>

        </div>


        <div class="row  mt-2 justify-content-center">
            <div class="col-5">
                <p> <?php echo 'В Ваш личный кабинет'  ?></p>
            </div>

        </div>
        <div class="row  mt-0 justify-content-center">
            <div class="col-5">
                <a href='add-post-form.php' class="btn btn-light btn-lg "  role="button" ">Добавить пост </a>

            </div>

        </div>
        <div class="row  mt-2 justify-content-center">
            <div class="col-5">
                <?php ?>
                <form action='scripts/logout-controller.php' method='post'>
                    <input type='submit' class="btn btn-secondary" value='Выход'>

                </form>
            </div>
        </div>


        <?php
    } else {
        echo "Нажмите для входа"; ?>
        <a href='auth_page.php' class="btn btn-secondary">Вход </a>

        <?php
    }
    ?>
</div>

</div>
<div class="container">



</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
