<?php

    require_once("../Autoload.php");

    $sql = new PDOController();

    if(count($_POST) > 0){

        $loguin = $_POST['loguin'];
        $senha = $_POST['senha'];
        
        $sql->query("INSERT INTO tb_usuarios (user, pass) VALUES (:loguin, :senha)", array(":loguin" => $loguin, ":senha" => $senha));

    }
    
    ?>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <form method="post">
        <input type="text" name="loguin"><br>    
        <input type="password" name="senha" placeholder="****"><br><br>
        <button type="submit">Cadastrar</button>
    </form>
    