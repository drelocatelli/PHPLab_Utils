<?php

require_once("connect.php");

$sql = "INSERT INTO tb_usuarios(user, pass) VALUES(:login, :senha) ";

$login = "Jose";
$senha = "123333";


try{

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":login", $login);
    $stmt->bindParam(":senha", $senha);

    $stmt->execute();

    echo "inserido!";

}catch(PDOException $err){
    echo $err->getMessage();
}