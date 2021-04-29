<?php
	require('../conexaobanco.php');
    
    $sql = mysql_query("TRUNCATE TABLE produtos");
	header('Location: ../Delete all (Truncate Table).php');
	
?>