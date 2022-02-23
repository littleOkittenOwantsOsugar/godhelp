<?php
    session_start();
    require_once 'connect.php';

    if ($_SESSION['user']){

        $iduser=$_SESSION['user']['id'];
        $thing=$_POST['todo'];

        if($_POST['todo']!=NULL) {

            mysqli_query($connect, "INSERT INTO `listtodo` (`id`, `iduser`, `message`) VALUES (NULL, '$iduser', '$thing')");

            $_SESSION['message'] = 'Note recorded';
            header('Location: ../listtodo.php');

        } else {
            $_SESSION['message'] = 'Note is empty and not recorded';
            header('Location: ../listtodo.php');
        }
    }
?>