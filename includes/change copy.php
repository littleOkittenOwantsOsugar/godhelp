<?php
    session_start();
    $con=mysqli_connect('localhost', 'root', '', 'registration');
    if(!mysqli_connect('localhost','root')){
		echo "Проблемы с подключением";
	}

    /* $check_user = mysqli_query($connect, "SELECT * FROM `listtodo` WHERE `id` = '$login' AND `iduser` = '$pass'");
    
    if (mysqli_num_rows($check_user) > 0){

        $us= mysqli_fetch_assoc($check_user);


    $_SESSION['us']=[
        "id" => $us['id'],
        "iduser" => $us['iduser']
    ];
}
 */
    /* $id = $_REQUEST['id'];
    $s = "SELECT * FROM listtodo WHERE id = ".$id;

    $iduse = $_REQUEST['iduser'];
    $message=$_POST['mes']; */

    $s = "UPDATE `listtodo` SET `id`='$idi',`iduser`='$iduse',`message`=' ".$message." ' WHERE 1 ";
    mysqli_query($con, $s);

    //header('Location: ../listtodo.php');
    
?>