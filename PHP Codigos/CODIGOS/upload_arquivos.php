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
        <input type="file" name="arquivo">
        <button type="submit" name="submit">Enviar arquivo</button>
    </form>

    <?php 
        if(isset($_POST['submit'])) {

            # formatos permitidos
            $formatosPermitidos = array('png', 'jpeg', 'jpg', 'gif', 'bmp');
            
            # pega extensão do arquivo enviado
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
            
            if(in_array($extensao, $formatosPermitidos)) {
                
                # pasta onde irá salvar os arquivos
                $pasta = 'arquivos';
                
                $temporario = $_FILES['arquivo']['tmp_name'];

                # gera novo nome com um id
                $novoNome = uniqid() . ".$extensao";

                if(move_uploaded_file($temporario, "$pasta/$novoNome")) {
                    $mensagem = 'upload feito com sucesso!';
                } else {
                    $mensagem = 'Não foi possível fazer upload!';
                }
                
            }else{
                $mensagem = "Formato inválido!";
            }

            # informações do arquivo
            // var_dump($_FILES);
            
            echo $mensagem . '<br>';

        }
 

        # Mostra arquivos na pasta

        $dir = "arquivos/";
        $dirFiles = scandir($dir);

        echo '<br>';
        echo "Arquivos:<br>";


        foreach($dirFiles as $file){
            if($file == '..' or $file == '.'){
                $file = '';
            }else{
                $file = "<a href='arquivos/$file'>$file</a>";
                echo $file.'<br>';
            }
            
        }
       
    

    ?>

    
    
</body>
</html>