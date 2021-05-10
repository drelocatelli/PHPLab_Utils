<?php

require_once("../Autoload.php");

$sql = new PDOController();

if(count($_POST) > 0){

    $loguin = $_POST['loguin'];
    $senha = $_POST['senha'];
        
    $sql->query(" UPDATE tb_usuarios SET(user=:loguin,  pass=:senha)", array(":loguin" => $loguin, ":senha" => $senha));

}

$usuarios = $sql->select("SELECT * from tb_usuarios ORDER BY id DESC");

?>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<form method="post">
    Selecione o loguin que deseja alterar: <br>
    <select name="loguins">
    <?php
        foreach($usuarios as $usuario){
            $row = $usuario;
    ?>
        <option value="<?= $row['user']; ?>"><?= $row['user']; ?></option>
    <?php } ?>
    </select>
    <br><br>
    <input type="text" name="loguin"><br>    
    <input type="password" name="senha" placeholder="****"><br><br>
    <button type="submit">Cadastrar</button>
</form>
    