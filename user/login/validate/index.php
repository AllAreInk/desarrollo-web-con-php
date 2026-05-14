<?php


session_start();

if (isset($_SESSION['user_id'])){
    //el usuario ya esta logeado
    header("location: ../../../dashboard/");
    exit(); //solo si hay direccionamiento
}

    //no session=no usuario por lo que...


    $formUsername = $_POST['username'];
    $formPassword = $_POST['password'];

    $user = 'proyecto@web.cl';
    $pass = 'holaMundo';

    if($user === $formUsername && $pass === $formPassword){
        $_SESSION['user_id'] = 1;
        $_SESSION['user_name'] = 'Profesor B)';

        header("location: ../../../dashboard/");
        exit(); //solo si hay direccionamiento
    } 
        echo 'user y pass malos...';
    
