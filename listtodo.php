<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
    session_start();
    if (!$_SESSION['user']){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To do list</title>
</head>
<body>
    <!--To do list-->
    <div class='list'>
    <h2>Login:</h2>
    <h2><?= $_SESSION['user']['login']?></h2>
    <?php
    // вывести список из бд КАК?
    
$con=mysqli_connect('localhost', 'root', '', 'registration');
  if(!mysqli_connect('localhost','root')){
		echo "Проблемы с подключением";
	}
  
  echo "<table border='1'>
   <caption>Notes</caption>
   <tr>
    <th>id</th>
    <th>User</th>
    <th>Mnenie</th>
   </tr>";
$result_select=mysqli_query($con, "SELECT * FROM `registration`.`listtodo`");
  while($row = mysqli_fetch_array($result_select)){
    $id=$row['id'];
    $name=$row['iduser'];
    $text=$row['message'];
 
    echo "<tr><td>$id</td><td>$name</td><td>$text</td></tr>";
    }
  echo "</table>";
    ?>

    <form action="includes/insert.php" method="post">
    <label for="">Input what to do</label>
    <input type="text" name="todo" placeholder="type what to do">
    <?php
            if ($_SESSION['message']) {
                echo '<p class="msg">' .  $_SESSION['message']  . '</p>';
            }
            unset($_SESSION['message']);
    ?>

    <button type="submit" class="butinsert">Insert</button>

    </form>
    <a href="includes/logout.php" class="logout">Log out and return to start page</a>
    </div>
</body>
</html>