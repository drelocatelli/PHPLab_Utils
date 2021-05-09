<?php

require_once("connect.php");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(user, pass) VALUES(:login, :senha) ");

