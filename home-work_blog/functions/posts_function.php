<?php
require_once  'database.php';
function post_view()
{
    $connection = get_database_connection();
    $string ='SELECT * FROM new_blog. `post`';
    $statement=$connection->query($string);
    $arr=$statement->fetchAll();
    return $arr;
} //находим в базе данный ид и соответствеющте ему данные

