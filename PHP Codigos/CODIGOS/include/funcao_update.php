<?php
	
	include '../conexaobanco.php';
	$sql = mysql_query("UPDATE produtos SET produto = '".$_POST['produto']."', preco = '".$_POST['preco']."'
	where id = '".$_GET['id']."'");
	header("Location: ../listando banco.php");
?>