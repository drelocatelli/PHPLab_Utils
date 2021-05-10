<?php

require_once("../Autoload.php");

$sql = new PDOController();

if(isset($_GET['id'])){

    $loguin = $_POST['loguin'];
    $senha = $_POST['senha'];
        
    $sql->query("DELETE FROM tb_usuarios WHERE id = :loguins ", array(":loguins" => $_GET['id']));

    header("Location: DELETE.php");

}

    