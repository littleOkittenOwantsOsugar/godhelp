<?php
    session_start();
    require_once 'connect.php';
    $idw = $_REQUEST['id'];
    $query="DELETE FROM `listtodo` WHERE `id`=".$idw;
    mysqli_query($connect, $query);

    header('Location: ../listtodo.php');
    
?>