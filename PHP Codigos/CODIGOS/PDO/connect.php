<?php

try{
    $conn = new PDO("mysql:host=localhost;dbname=db_test", "root", "");
}catch(PDOException $err){
    echo $err->getMessage();
}