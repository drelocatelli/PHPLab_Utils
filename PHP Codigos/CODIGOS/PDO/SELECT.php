<?php

    require_once('Classes/Autoload.php');

    $sql = new PDOController();
    $usuarios = $sql->select("SELECT * from tb_usuarios");

    echo json_encode($usuarios);