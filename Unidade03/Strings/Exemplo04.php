<?php

$frase = "A repetição é a mãe da retenção";

$q = strpos($frase, "mãe");

$text = substr($frase, 0, $q);

var_dump($text);


$text2 = substr($frase, $q+3);

var_dump($text2);


?>