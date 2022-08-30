<?php

session_start();

?>
<!doctype html>
<html lang="ru">
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
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>
<body>


<div class="container ">
    <?php require_once __DIR__ . './../templates/header.php'; ?>
    <div class="container">
        <div class="row justify-content-center ">

            <div class="col col-lg-6 border ">
                <p class=" mt-3 h5 title-add-post">Форма создания поста</p>
                <form action="../controllers/add-post-controller.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $_SESSION['user_id']; ?> ">
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Заголовок поста
                        </label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">
                            Фото поста
                        </label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">
                            Содержание поста
                        </label>
                        <textarea name="text" id="text" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="type" class=" form-label">
                            Тип поста
                        </label>
                        <select multiple class="form-control" id="type" name="type">
                            <option>Мир</option>
                            <option>История</option>
                            <option>Дизайн</option>
                            <option>Культура</option>
                            <option>Бизнес</option>
                            <option>Политика</option>
                            <option>Мнение</option>
                            <option>Наука</option>
                            <option>Здоровье</option>
                            <option>Стиль</option>
                            <option>Бизнес</option>
                            <option>Путешествия</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-secondary btn-lg d-block w-100 mb-3">
                        Отправить
                    </button>
                </form>
            </div>

        </div>
    </div>
    <?php require_once __DIR__ . './../templates/footer.php'; ?>
</div>

</body>
</html>