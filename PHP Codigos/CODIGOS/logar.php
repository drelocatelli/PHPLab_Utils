<?php

	// Conecta no banco
	require('../../includes/connection.php');

	$sql = mysql_query("SELECT * FROM users WHERE user = '".$_POST['user']."' and pass = '".$_POST['pass']."'");

	if(mysql_num_rows($sql)==true){
		while($ln = mysql_fetch_array($sql)){

			$_SESSION['user'] = $ln['user'];
			$_SESSION['pass'] = $ln['pass'];
			$_SESSION['photo'] = $ln['photo'];
			$_SESSION['info'] = $ln['info'];
			$_SESSION['nivel'] = $ln['nivel'];
			
			echo '<center style="padding:19% 0; font-size:48px;">Verificando ...</cente>';
			header( "refresh:2;url=../painel/" );		
		}
	}else{
		echo "<script type='text/javascript'>
			alert('Usuário e/ou Senha não corresponde. Tente novamente !');
		</script>
		<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=../index.php'>
		";
	}
	
	// Redirecionamento automatico
?>