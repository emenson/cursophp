<?php
//OPERADORES ESPECIAIS
// <=> SPACESHIP

$a = 50;
$b = 50;

var_dump($a<=>$b);
echo"<br>";


// ?? NULL COM ELSE

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;



?>