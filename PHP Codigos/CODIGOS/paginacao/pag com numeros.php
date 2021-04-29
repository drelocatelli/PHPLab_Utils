<?php
	error_reporting(0);
	mysql_connect("localhost", "root", "");
	mysql_select_db("teste");

	$busca = ("SELECT * FROM postagens ORDER BY id DESC");

	$total_reg = 3;

	$pagina=$_GET['pagina'];
	if(!pagina){
		$pc = "1";
	}else{
		$pc="$pagina";
	}

	$inicio = $pc-0;
	$inicio = $inicio * $total_reg;

	$limite = mysql_query("$busca LIMIT $inicio, $total_reg");
	$todos = mysql_query("$busca");

	$tr = mysql_num_rows($todos); // num total de registros
	$tp = $tr/$total_reg; // num total de paginas
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>

	<body>
	<h1>Postagens</h1>
		<table border="1">
		<tr>
		<td>Titulo</td>
		<td>Texto</td>
		</tr>
		<tr>
		<?php
		while($ln = mysql_fetch_array($limite)){
			$titulo = $ln['titulo'];
			$texto = $ln['texto'];
			$id = $ln['id']
	?>
		<td><?php echo substr($titulo,0,14); ?></td>
		<td><?php echo substr($texto,0,14); ?></td>
		</tr>
	<?php } ?>
		</table>

	</body>
	<li><a href="index.php?pagina=<?php echo $pagina-1; ?>">Anterior</a></li>
	<?php 
		for($i=0;$i<$tp;$i++){
		if($pagina == $i)
	?>
	<li><a href="index.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
	<?php } ?>
	<li><a href="index.php?pagina=<?php echo $pagina+1; ?>">Próxima</a></li>
</html>

<style>
li{list-style: none; display:inline-block;}
</style>