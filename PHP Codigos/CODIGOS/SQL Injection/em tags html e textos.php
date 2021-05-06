Anti Sqllnjection e tags html 
PHP 
function anti_injection(Ssql) { // remove palavras que contenham sintaxe sql Ssql = preg_replace(sql_regcasec/(fromiselectlinsertideletelwhereldrop tableishow tablesi#R*1-1%\)/17,$sql); Ssql = trim(Ssql);//limpa espacos vazio Ssql = strip_tags(Ssql);//tira tags html e php Ssql = addslashes(Ssql);//Adiciona barras invertidas a uma string return Ssql; } 
//modo de usar pegando dados vindos do formulario Snome = anti_injection(LPOSTrnomel); Ssenha = anti_injection(S_POSTflenhal); 

