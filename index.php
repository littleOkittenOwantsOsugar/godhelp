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
    <!--Form of authorization-->
    <form action="includes/auth.php" method="post">
        <label for="">Login</label>
        <input type="text" name="login" placeholder="type login">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="type password">
        <button type="submit">Login</button>
        <p><a href="registration.php">Registration</a></p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg">' .  $_SESSION['message']  . '</p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>