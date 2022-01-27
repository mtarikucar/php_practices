<?php
    session_start();
    ob_start();
    require "./members.php";
    if (isset($_SESSION["username"])) {
        include "main_page.php";
        
    } else {
        include "register.php";
        echo $_SESSION["username"] . "............................";
    }
?>
