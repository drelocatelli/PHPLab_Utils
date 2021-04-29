<?php 
	// Puxa Conexão com banco
	require "conexaobanco.php"; 
	// Seleção do banco
	$sql = mysql_query("SELECT * FROM produtos");
	// Para repetir
	
	while($ln = mysql_fetch_array($sql)){
			
		$produto = $ln['produto'];
		$preco = $ln['preco'];
		
		// Lista produtos na tela
		//echo "Nome do produto: <b>$produto</b>" . "<br>Preço: <b>$preco</b><br><br>";
	
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    	<title>Sem nome</title>
    </head>
    
    <body>
    	<?php echo $produto; ?> &nbsp;&nbsp;&nbsp;
        <sup><?php echo $preco; ?></sup>
        <br><br>
    </body>
</html>
<?php } ?>