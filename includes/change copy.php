<?php
    session_start();
    
    $con=mysqli_connect('localhost', 'root', '', 'registration');
    if(!mysqli_connect('localhost','root')){
		echo "Проблемы с подключением";
	}

    //НЕ ОПРЕДЕЛЯЕТ id

    //$id = $_REQUEST['id'];
    $id = $_POST[ "idi" ];
    $name=$_SESSION['user']['id'];
    $text=$_POST["mes"]; 

    $s = "REPLACE INTO `listtodo` SET `id` = '".$id."', `iduser` = '".$name."', `message` = '".$text."'";

    $_SESSION['message'] = 'SUCCESFULL';

    mysqli_query($con, $s);

    header('Location: ../listtodo.php');

?>