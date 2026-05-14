<?php

session_start();

$_SESSION = array();

session_destroy();

echo 'Largo' . count($_SESSION);

if (count ($_SESSION)==0){
    header("Location: ../../");
    exit();
}