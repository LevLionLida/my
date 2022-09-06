<?php

session_start();

spl_autoload_register(
    function($class) {
        include $_SERVER['DOCUMENT_ROOT'] . '/' . str_replace('\\', '/', $class) . '.php';
    }
);
require_once './../functions/posts_function.php';

$post_id = $_GET['id'];
$select_edit_post = get_post_id($post_id);

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
</head>
<body>
<div class="container">
    <?php require_once __DIR__ . './../templates/header.php'; ?>
    <div class="row justify-content-center ">
        <?php foreach ($select_edit_post

        as $post): ?>
        <div class="col col-lg-6 border ">
            <p class=" mt-3 h5 title-add-post">Форма создания поста</p>

            <form action="../controllers/add-refactor-post.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $_SESSION['user_id']; ?> ">
                <div class="mb-3">
                    <label for="name" class="form-label">
                        Заголовок поста
                    </label>
                    <input type="text" name="name" id="name" class="form-control" value="<?= $post['name_post']; ?>"
                           required>
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
                    <textarea name="text" id="text" class="form-control"
                              rows="3"><?php echo $post['text_post']; ?></textarea>
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

                <div class="mb-3">
                    <input type="hidden" value="<?= $post_id; ?>" name="post_id" class="form-control">

                </div>

                <button type="submit" class="btn btn-secondary btn-lg d-block w-100 mb-3">
                    Отправить
                </button>
            </form>
        </div>

    </div>

<?php endforeach; ?>

    <?php require_once __DIR__ . './../templates/footer.php'; ?>
</div>

</body>
</html>