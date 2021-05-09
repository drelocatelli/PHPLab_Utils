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
		?>
        
        	<?php echo $ln['produto'];?> - <a href="include/delete_function.php?id=<?php echo $ln['id'];?>">Deletar</a>
           <br>

        <?php
		} //Fecha loop
		?>
	</body>

</html>