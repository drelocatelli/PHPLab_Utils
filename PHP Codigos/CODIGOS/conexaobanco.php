<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

// Conexão com o banco de dados
	
	$ddconexao = "localhost";	$ddusuario = "root";	$ddsenha = "";	$ddbanco = "mistercraft";
	
	mysql_connect($ddconexao, $ddusuario, $ddsenha);
	
	// Seleciona banco
	mysql_select_db($ddbanco);

?>