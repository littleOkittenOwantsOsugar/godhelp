<?php
    session_start();
    $con=mysqli_connect('localhost', 'root', '', 'registration');
    if(!mysqli_connect('localhost','root')){
		echo "Проблемы с подключением";
	}
    $idw = $_REQUEST['id'];
    $query="DELETE FROM `listtodo` WHERE `id`=".$idw;
    mysqli_query($con, $query);

    header('Location: ../listtodo.php');
    
?>