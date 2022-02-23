<?php
    session_start();
    
    $con=mysqli_connect('localhost', 'root', '', 'registration');
    if(!mysqli_connect('localhost','root')){
		echo "Проблемы с подключением";
	}

    //НЕ ОПРЕДЕЛЯЕТ id

    result_select=mysqli_query($con, "SELECT * FROM `registration`.`listtodo`");
    $row = mysqli_fetch_array($result_select);
    $id=$row['id'];

    //$idq = $_REQUEST['id'];
    $name=$_SESSION['user']['id'];
    $text=$_POST["mes"]; 

    $s = "REPLACE INTO `listtodo` SET `id` = '".$id."', `iduser` = '".$name."', `message` = '".$text."'";

    $_SESSION['message'] = $s;

    mysqli_query($con, $s);

    header('Location: ../listtodo.php');

?>