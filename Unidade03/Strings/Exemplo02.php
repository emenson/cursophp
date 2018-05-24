<?php
//TRABALHANDO COM STRINGS
//COLOCANDO EM CAIXA ALTA - strtoupper()

$nome = "Emenson";

$nome2 = 'Emenson';

echo "<br>";

echo strtoupper($nome);

//COLOCANDO EM CAIXA BAIXA - strtolower()


$nome2 = 'Emenson';

echo "<br>";

echo strtolower($nome2);

//COLOCANDO PRIMEIRA LETRA EM CAIXA ALTA - ucfirst()


$nome2 = 'emenson';

echo "<br>";

echo ucfirst($nome2);

//COLOCANDO DEMAIS LETRAS EM CAIXA ALTA - ucfirst()


$nome2 = 'Emenson';

echo "<br>";

echo ucwords($nome2);



?>