<?php
session_start();

function logout( ):bool
{
    if (count($_COOKIE) > 0) {
        setcookie("auth", "", time() - 40, "/");
        setcookie("email", "", time() - 40, "/");
        $status=true;
    }
    else{
        $status=false;
    }
    return $status;
}

header('Location: ../pages/auth_page.php');