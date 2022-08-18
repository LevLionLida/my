<?php

session_start();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="../style/signin.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row justify-content-center ">

        <div class="col col-lg-4 border ">
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
                        <option>Технологии</option>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
</div>
</body>
</html>