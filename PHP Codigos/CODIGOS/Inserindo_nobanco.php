<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    	<title>Sem nome</title>
    </head>
    
    <body>
	<h3>Cadastre o novo produto</h3>
	<table border="1">
		<form method="post" action="include/acao_insere.php">
			<tr>
			<td>Produto:
			<td><input type="text" name="produto"/>
			</tr>
			
			<tr>
			<td>Preço:
			<td><input type="text" name="preco"/>
			</tr>
			
			<tr>
			<td><button type="submit">Cadastrar</button>
			</tr>
		</form>
		<a href="listando banco.php">Ver registros</a>
		</table>
    </body>
</html>