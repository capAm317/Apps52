<?php

    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    if(strcmp($username, "marjmallows") == 0 && strcmp($password, "smartsales1234") == 0){
         header("Location: main.php"); /* Redirect browser */
        exit();
    }
    else{
        header("Location: index.php"); /* Redirect browser */
    }

