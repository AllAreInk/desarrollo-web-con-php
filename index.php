<?php

// iniciar o reanudar la sesion del usuario actuales
session_start();

//var_dump($_SERVER);

if (isset($_SESSION['user_id'])){
    //el usuario esta logeado
    header("location: ../../dashboard/");
    exit(); //solo si hay direccionamiento
}
else{
    //no session=no usuario por lo que...
    header("Location: user/login");
    exit();
}