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

    $s = "select * from products";
    $res = mysqli_query($connect, $s);


    while ($row = mysqli_fetch_array($res))
    {
        print ("<tr>");
       print ("<td>".$row[0]."</td>");
       print ("<td>".$row[1]."</td>");
       print ("<td>".$row[2]."</td>");
       print ("</tr>");
    }
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