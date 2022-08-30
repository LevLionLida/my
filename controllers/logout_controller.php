<?php
require_once __DIR__ . '/../functions/logout.php';

$logout=logout( );

if ($logout==true){
    header('Location: ../pages/account_page.php');
    exit;

}