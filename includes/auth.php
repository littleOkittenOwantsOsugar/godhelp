<?php
    session_start();
    require_once 'connect.php';

    $login=$_POST['login'];
    $pass=md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
    
    if (mysqli_num_rows($check_user) > 0){
        
    } else{
        $_SESSION['message'] = 'Wrong login or password';
        header('Location: ../index.php');
    }