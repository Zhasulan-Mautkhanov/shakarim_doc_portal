<?php
    session_start();
    include "../config/db.php";
    $login = $_POST['user_login'];
    $password = $_POST['user_password'];
    $passwordA = md5($password);

    $userCheck = mysqli_query($conn, "SELECT * FROM `users` WHERE `user_login` = '$login' AND `user_password` = '$passwordA'");
    if(mysqli_num_rows($userCheck) > 0){
        $user = mysqli_fetch_assoc($userCheck);
        $_SESSION['user'] = [
            "user_id" => $user['user_id'],
            "user_login" => $user['user_login'],
            "user_password" => $user['user_password'],
            "user_role" => $user['user_role']
        ];
        echo "connected";
        header('location:../index.php');
    }
    
    echo mysqli_num_rows($userCheck);
    if(mysqli_num_rows($userCheck) == 0){
        $_SESSION['massage'] = 'Неверный логин или пароль';
    }
    
?>