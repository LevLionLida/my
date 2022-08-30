<?php session_start();


//require_once __DIR__ . './../functions/template.php';
require_once __DIR__ . './../functions/posts_function.php';//подключаем функцию выборки постов

$posts_view = post_view();


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

<div class="container">

    <?php require_once __DIR__ . './../templates/header.php'; ?>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">История</h1>
                <p class="lead my-3">Рассказываем о нашей работе, делимся планами на будущее, знакомим с новыми
                    проектами,
                    публикуем интересные факты из истории города и другие занимательные материалы</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>
    </main>

    <div class="container">

        <div class="row mb-2">
            <?php //require_once __DIR__ . './../templates/filter.php' ?>

            <div class="row mb-2">
                <?php //$i = 1;
                foreach ($posts_view

                as $post) :
                // print_r($post);
                ?>

                <div class="col-md-6">

                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success"><?= $post['type'] ?></strong>
                            <h3 class="mb-0"><?= $post['name_post'] ?></h3>
                            <div class="mb-1 text-muted"><?= $post['time'] ?></div>
                            <p class="mb-auto"> <?php //echo substr($post['text_post'],-100);
                                echo mb_substr($post['text_post'], 0, 78) . ' ...';
                                ?></p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>

                        <div class="col-auto d-none d-lg-block">
                            <?php $file = "./../storage/" . $post['image_post'];
                            ?>
                            <img class="bd-placeholder-img" src="<?= $file ?>" width="200" height="250" role="img"
                                 aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                 focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <text x="50%" y="50%" fill="#eceeef"
                        </div>

                    </div>

                </div>
            </div>
        <?php endforeach;
        ?>
        </div>
    </div>

    <?php require_once __DIR__ . './../templates/footer.php'; ?>
<div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>
</html>
