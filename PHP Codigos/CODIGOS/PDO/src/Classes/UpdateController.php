<?php

require_once("../Autoload.php");

$sql = new PDOController();

if(count($_POST) > 0){

    $loguin = $_POST['loguin'];
    $senha = $_POST['senha'];
        
    $sql->query("UPDATE tb_usuarios SET user = :loguin, pass = :senha WHERE id = :loguins ", array(":loguin" => $loguin, ":senha" => $senha, ":loguins" => $_GET['id']));

    header("Location: UPDATE.php");

}

?>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<form method="post">
    <input type="text" name="loguin"><br>    
    <input type="password" name="senha" placeholder="****"><br><br>
    <button type="submit">Salvar</button>
</form>
    