<?php
    session_start();
    
    require_once 'connect.php';

    $id = $_POST['idi'];
    $name=$_SESSION['user']['id'];
    $text=$_POST["mes"]; 

    $s = "REPLACE INTO `listtodo` SET `id` = '".$id."', `iduser` = '".$name."', `message` = '".$text."'";

    $_SESSION['message'] = 'SUCCESFULL';

    mysqli_query($connect, $s);

    header('Location: ../listtodo.php');

?>