<?php

    require_once('../Autoload.php');

    $sql = new PDOController();

    $loguin = "usuario"; $senha = "senha";
    
    $sql->query("INSERT INTO tb_usuarios (user, pass) VALUES (:loguin, :senha)", array($loguin, $senha));