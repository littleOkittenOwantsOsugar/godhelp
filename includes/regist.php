<?php
    session_start();
    require_once 'connect.php';

    $login=$_POST['login'];
    $pass=$_POST['password'];
    $pass_con=$_POST['password_confirm'];

    if ($pass === $pass_con) {

    } else {
        $_SESSION['message'] = 'Passwords do not match';
        header('Location: ../registration.php');
    }
?>