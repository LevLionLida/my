<?php
require_once __DIR__ . './../functions/posts_function.php';//подключаем функцию выборки постов

$post_view = post_view();//массив постов


//array_multisort($dateArray, SORT_STRING, $yourArr

function oldPost($a, $b) {
    return strtotime($b['time']) - strtotime($a['time']);
}

usort($post_view, 'oldPost');
