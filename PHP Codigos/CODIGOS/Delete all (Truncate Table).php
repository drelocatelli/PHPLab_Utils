<?php 
	// Puxa conexao
	require('conexaobanco.php');
	
	$sql = mysql_query("SELECT * FROM produtos");
	// Para repetir
	
	while($ln = mysql_fetch_array($sql)){
			
		$produto = $ln['produto'];
		$preco = $ln['preco'];
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <title>Untitled Document</title>
    </head>
    
    <body>
        <?php echo "$produto <br>"; } ?><a href="include/delete_all.php">Excluir tudo</a>
    </body>

</html>
