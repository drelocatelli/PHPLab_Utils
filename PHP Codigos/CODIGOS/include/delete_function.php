<?php
	
	require('../conexaobanco.php');
	
	$sql = mysql_query("DELETE FROM produtos WHERE id ='".$_GET['id']."'");
	header("Location: ../delete.php");
?>