<?php 
   // variavel contendo textos separados por virgula
   $string = 'html, php, mysql,jquery'; 
   $tags = array();
   // explode — Divide uma string em strings
   // pelo delimitador definido (virgula)
   $tags = explode(',', $string); 
   // loop
   foreach ($tags as $tag) { 
      $links[] = '<a href="index.php?tag='.trim($tag).'">'.$tag.'</a>'; 
   }   
   //implode — Junta elementos de uma matriz em uma string
   $link = implode(' | ', $links); 
   // exibe na tela
   echo $link; 
?>