<?php
    session_start();
    require "./members.php";
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        print_r($_SESSION);
        if(!$username || !$password){
            $hata = "boş geçilemez";
        }
        else if($username != $member["name"]){
            $hata = "username wrong";
        }
        else if($password != $member["password"]){
            $hata = "password wrong";
        }
        else{
            $_SESSION["username"] = $member["name"];
            header("Location:/2_php_login_register");
        }

    }
?>

<?php

    echo isset($hata) ? "giriş başarısız"."<br>".$hata : "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="form" style="text-align: center; justify-content: center;">
        <h1>kaydolmalısın</h1>
        <form action="register.php" method="post">
            <input type="text" placeholder="username" id="username" style="margin-bottom: 5px;" name="username"> <br>
            <input type="password" placeholder="******" id="password"style="margin-bottom: 5px;" name="password"><br>
            <button type="submit" name="submit" value="submit" autofocus style="margin-bottom: 5px;">submit</button>
        </form>
    </div>
</body>

</html>
