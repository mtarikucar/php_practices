<?php
require "members.php";
session_start();
    if(isset($_POST["submit"])){
        if($_POST["name"] == "" || $_POST["password"] == "" || $_POST["name"] == null || $_POST["password"] == null){
            echo "eksik bilgi girdiniz";
        }else if($member["name"] != $_POST["name"]){
            echo "böyle bir kullanıcı bulunamadı";
            echo '<a  href="register.php" type="button" name="register" id="register"">kaydol</a>';
        }
        else if($member["password"] != $_POST["password"]){
            echo "şifre yanlış";
        }
        else{
            $_SESSION["name"] = $_POST["name"];
            header("Location:./main.php");
        }
    }
    print_r($_SESSION); 
?>

<form action="" method="post" id="login_form">
    <h1>login</h1>
    <input type="text" name="name">
    <input type="password" name="password">
    <button type="submit" name="submit" id="submit">giriş yap</button>
</form>