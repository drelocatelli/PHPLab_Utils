<?php
$format = array();
$format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ!@#$%¨&*()_=+{[]}?;:.,\\\<>º"';
$format['b'] = "aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-----------------------------"; 
$Url = strtr(utf8_decode($Url), utf8_decode($format['a']), $format['b']);

?>