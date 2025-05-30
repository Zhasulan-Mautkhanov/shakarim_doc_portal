

<?php

    session_start();
    $host = 'localhost';
    $root = 'root';
    $pass = '';
    $db = 'shakarimDocsPortal';

    
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    mb_internal_encoding('UTF-8');
    $conn = mysqli_connect($host, $root, $pass, $db);
    //$goodsAll = mysqli_query($induction,"SELECT * FROM `goods`");

    if(!$conn){
        die ('Жасулан(Я) допустил ошибку - Прошу прощения');
    }

    if($_SESSION == False){
        echo "SESSION INDEX NOT FOUND";
        header('location:includes/auth.php');
    }
?>