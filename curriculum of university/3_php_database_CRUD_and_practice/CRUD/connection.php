<?php
try{
    $db =  new PDO("mysql:host=localhost;dbname=php_practices","root","root");
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>