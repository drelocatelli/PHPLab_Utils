// Página restrita
	session_start();
	// Permissões:
	if(!isset($_SESSION['login']) and !isset($_SESSION['senha']) or ($_SESSION['nivel'] !== 'user') and ($_SESSION['nivel'] !== 'mod') and ($_SESSION['nivel'] !== 'vip') and ($_SESSION['nivel'] !== 'admin')){
			echo "<script type='text/javascript'>
			alert('Sem permissão! Motivos para aparecer esse erro: [Não estar logado / Banimento / Conta desativada temporáriamente]');
		</script>
		<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=../index.php'>
		";
			exit;
		}