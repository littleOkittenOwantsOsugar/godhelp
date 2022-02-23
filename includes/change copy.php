<?php
    session_start();
    
    $con=mysqli_connect('localhost', 'root', '', 'registration');
    if(!mysqli_connect('localhost','root')){
		echo "Проблемы с подключением";
	}

    //НЕ ОПРЕДЕЛЯЕТ iduser
    
    $idish = $_REQUEST['id'];
    $namish = $_REQUEST['iduser'];
    $price = $_POST["mes"];

    $s = "REPLACE INTO `listtodo` SET `id` = '".$idish."', `iduser` = '".$namish."', `message` = '".$price."'";

    $_SESSION['message'] =$s;

    mysqli_query($con, $s);

    header('Location: ../listtodo.php');

?>