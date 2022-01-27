<?php
    session_start();
    ob_start();
    require "connection.php";
    echo "hoşgeldin ".$_SESSION["name"];
    if(!isset($_SESSION["name"])){
        include "login.php";
    }
    else{
        include "main.php";
    }
?>