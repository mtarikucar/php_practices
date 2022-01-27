<?php
require "members.php";
require "connection.php";
print_r($_POST); 
    if(isset($_POST["submit"])){
        if($_POST["name"] == "" || $_POST["password"] == "" || $_POST["name"] == null || $_POST["password"] == null){
            echo "eksik bilgi girdiniz";
        }
        else{
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = 'john@example.com';
            $sql = "INSERT INTO users (user_name, user_password, email)
            VALUES ('$name', $password,'john@example.com' )";
            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
              }
            //header("Location:./login.php");
        }
    }

    
?>

<form action="" method="post" id="login_form">
    <h1>register</h1>
    <input type="text" name="name">
    <input type="password" name="password">
    <button type="submit" name="submit" id="submit">kaydol</button>
</form>