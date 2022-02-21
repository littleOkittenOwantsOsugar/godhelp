<?php
    //mysqli_connect
    $connect = mysqli_connect('localhost', 'root', '', 'registration');

    if (!$connect){
        die('Error connect to database');
    }