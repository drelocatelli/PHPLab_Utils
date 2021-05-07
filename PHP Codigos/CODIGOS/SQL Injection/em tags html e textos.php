<?php

// Anti Sqllnjection e tags html PHP 
function anti_injection(Ssql) { 
    Ssql = preg_replace(preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|*|--|\\\\)/"),"",$Variavel);); // remove palavras que contenham sintaxe sql 
    Ssql = trim(Ssql);//limpa espacos vazio 
    Ssql = strip_tags(Ssql);    //tira tags html e php 
    Ssql = addslashes(Ssql);//Adiciona barras invertidas a uma string return Ssql; 
} 
// modo de usar pegando dados vindos do formulario 
Snome = anti_injection($_POST['nome']); 
$senha = anti_injection(S_POST['senha']); 


