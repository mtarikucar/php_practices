<?php
$localhost = "localhost";
$usrname = "root";
$password = "root";
$db = "php_practices";
$connection = mysqli_connect($localhost,$usrname,$password,$db);
if($connection->error){
    echo "fail";
}
else{
    echo "connection success";
}   
?>