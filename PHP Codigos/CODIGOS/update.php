<html>

	<head>
	<title>Sem nome</title>
    <meta charset="utf-8">
	</head>
	
	<body>
		<?php 
		require('conexaobanco.php');
			$sql = Mysql_query("SELECT * FROM produtos");
			while($ln = mysql_fetch_array($sql)){
				$produto = $ln['produto'];
				$preco = $ln['preco'];
			$id = $ln['id'];	
			
		?>
        
        <table border="1">
            <form method="post" action="include/funcao_update.php?id=<?php echo $id;?>">
                <tr>
                <td>Produto:<input name="produto" value="<?php echo $produto;?>" />
                <td>Preço:<input name="preco" value="<?php echo $preco;?>" />
                <td><button type="submit">Atualizar registro</button>
            </tr>
            </form>
        </table>
        
        <?php
		} //Fecha loop
		?>
	</body>

</html>