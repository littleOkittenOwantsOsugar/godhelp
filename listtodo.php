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
    <a href="includes/logout.php" class="logout">Log out and return to start page</a>
    </div>
</body>
</html>