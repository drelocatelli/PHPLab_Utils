<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple> <!-- nome como array e atributo multiple -->
        <button type="submit" name="submit">Enviar arquivo</button>
    </form>

    <?php 
        if(isset($_POST['submit'])) {
             # formatos permitidos
             $formatosPermitidos = array('png', 'jpeg', 'jpg', 'gif', 'bmp');
             $quantidadeArquivos = count($_FILES['arquivo']['name']);
             $contador = 0;

            while($contador < $quantidadeArquivos) {
                
                # pega extensão do arquivo enviado
                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
                
                if(in_array($extensao, $formatosPermitidos)) {
                    
                    # pasta onde irá salvar os arquivos
                    $pasta = 'arquivos';
                    
                    $temporario[$contador] = $_FILES['arquivo']['tmp_name'][$contador];

                    # gera novo nome com um id
                    $novoNome = uniqid() . ".$extensao";

                    if(move_uploaded_file($temporario[$contador], "$pasta/$novoNome")) {
                        echo "upload feito com sucesso para '/$pasta/$novoNome' <br>";
                    } else {
                        echo "erro ao enviar o arquivo $temporario <br>";
                    }
                    
                }else{
                    echo "Formato inválido ($extensão) ! <br>";
                }

                # informações do arquivo
                // var_dump($_FILES);
                $contador++;                
            }

        }
        
    ?>

    <?php

        # Mostra arquivos na pasta

        $dir = "arquivos/";
        $dirFiles = scandir($dir);

        $dirFiles = join("<br>",$dirFiles);


        echo '<br>';
        echo "Arquivos:<br>". $dirFiles;


    ?>

    
    
</body>
</html>