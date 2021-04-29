<html>

	<head>
	<title>Sem nome</title>
    <meta charset="utf-8">
	</head>
	
	<body>
    <?php
		$media = 18;
		$nota = $_POST["nota"];
		
		if($nota >= $media){
			echo "Você passou com a nota $nota";
			}elseif($nota == 17){
			echo "Raspando com $nota;";
			}else{
			echo "Você não passou. Sua nota: $nota";
			}
	?>
    <br>
    <b>Pesquise se você passou no 1° Trimestre</b>
		<form method="post">
            <input name="nota" type="text" value="">
            <button type="submit">Pesquisar nota</button>
        </form>
	</body>

</html>