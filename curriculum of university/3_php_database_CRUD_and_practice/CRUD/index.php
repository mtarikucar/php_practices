<?php
require "./connection.php";

if(!isset($_GET)){
    $_GET["sayfa"] = "index";
}

switch($_GET["sayfa"]){
    case "insert":
        require_once "insert.php";
        break;
}
?>