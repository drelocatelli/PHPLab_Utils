<?php
	
	// Puxa conexao
	require('../conexaobanco.php');
	
	// Função cadastrar registro
	$sql = mysql_query("INSERT INTO produtos (produto, preco) values ('".$_POST['produto']."', '".$_POST['preco']."') ");
	header("Location: ../listando banco.php");
?>