<?php

    require_once('../Autoload.php');

    $sql = new PDOController();
    $usuarios = $sql->select("SELECT * from tb_usuarios ORDER BY id DESC");

    echo json_encode($usuarios);