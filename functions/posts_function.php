<?php
require_once 'database.php';
function post_view()
{
    $connection = get_database_connection();
    $string = 'SELECT * FROM new_blog. `post`';
    $statement = $connection->query($string);
    $arr = $statement->fetchAll();
    return $arr;
} //находим в базе данный ид и соответствеющте ему данные

function post_user_id()
{
    $user_id = $_SESSION['user_id'];
    $connection = get_database_connection();
    $statement = $connection->prepare(
        'SELECT * FROM `post` WHERE `user_id`=:user_id'
    );
    $statement->execute(['user_id' => $user_id]);
    return $statement->fetchAll();

}//выборка постов по ид пользователю

function get_post_id($post_id)
{
    $connection = get_database_connection();
    $statement = $connection->prepare(
        'SELECT * FROM `post` WHERE `post_id`=:post_id'
    );
    $statement->execute(['post_id' => $post_id]);
    return $statement->fetchAll();

}//выборка постов по ид пользователю

function editPost (){



}
