<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
    <!--Form of registration-->
    <form action="includes/regist.php" method="post">
        <label for="">Login</label>
        <input type="text" name="login" placeholder="type login">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="type password">
        <label for="">Password confirmation</label>
        <input type="password" name="password_confirm" placeholder="confirm your password">
        <button>Registration</button>
        <p><a href="index.php">Back to Login</a></p>

        <p class="msg">
            <?= $_SESSION['message'] ?>
        </p>
    </form>
</body>
</html>