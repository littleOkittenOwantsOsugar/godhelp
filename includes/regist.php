<?php
    session_start();
    require_once 'connect.php';

    $login=$_POST['login'];
    $pass=$_POST['password'];
    $pass_con=$_POST['password_confirm'];

    if ($pass === $pass_con) {
        
        $pass=md5($pass);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$pass')");
        
        $_SESSION['message'] = 'Registration completed';
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Passwords do not match';
        header('Location: ../registration.php');
    }
?>