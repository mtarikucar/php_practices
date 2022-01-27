<?php
require "connection.php";
$query = $db->prepare('INSERT INTO users SET 
user_name = ?,
user_password = ?,
email = ?');
$add = $query->execute([
    "buse","123","123buse@123.com"
]);

if($add){
    echo"buseyi ekledik"; 
}
else{
    print_r( $query->errorInfo());
}
?>