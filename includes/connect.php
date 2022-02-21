<?php
    //mysqli_connect
    $connect = mysqli_connect(host:'localhost', user:'root', password:'', database:'registration');
    if (!$connect){
        die('Error connect to database');
    }