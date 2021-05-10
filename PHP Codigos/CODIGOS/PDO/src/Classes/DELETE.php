<?php

require_once("../Autoload.php");

$sql = new PDOController();

$result = $sql->select("SELECT * from tb_usuarios ORDER BY id DESC");

echo 'Selecione o usuario:<br>';

foreach($result as $usuario){
?>

<a href="DeleteController.php?id=<?=$usuario['id'];?>"><?=$usuario['user'];?></a><br>

<? } ?>