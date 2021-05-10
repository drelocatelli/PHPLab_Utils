<?php

require_once("../Autoload.php");

$sql = new PDOController();

if(count($_POST) > 0 AND if(isset($_GET['id']))){

    $loguin = $_POST['loguin'];
    $senha = $_POST['senha'];
        
    $sql->query("UPDATE tb_usuarios SET user = :loguin, pass = :senha WHERE id = :loguins ", array(":loguin" => $loguin, ":senha" => $senha, ":loguins" => $_GET['id']));

    header("Location: UPDATE.php");

}

$result = $sql->select("SELECT * from tb_usuarios WHERE id = :loguins", array(":loguins" => $_GET['id']));

foreach($result as $usuario){}

?>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<form method="post">
    <input type="text" name="loguin" value="<?= $usuario['user']; ?>"><br>    
    <input type="password" name="senha" placeholder="****" value="<?= $usuario['pass']; ?>"><br><br>
    <button type="submit">Salvar</button>
</form>
    