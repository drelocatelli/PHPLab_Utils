<?php

if(isset($_POST['button_name'])){

      $textarea =  $_POST['textarea_name'];

      function html_replace($value){
            $value = strip_tags($value);

            $string['a'] = ['[b]', '[/b]', '[br]', '[hr]', '[quote]', '[/quote]'];
            $string['b'] = ['<b>', '</b>', '<br>', '<hr>', '<quote style="color: #555; padding-left: 11px; border-left: 2px solid #555; margin-left: 10px;">', '</quote>'];

            $value = str_replace($string['a'], $string['b'], $value);
            $value = nl2br($value);

            return $value;
      }

      echo html_replace($textarea);

}

?>

<form method="post" action="html_replace.php">
<textarea rows="4" cols="60" name="textarea_name"></textarea>
<br><br>
<button type="submit" name="button_name">Enviar</button>
</form>