<?php

//Nomes das variáveis sempre minusculo, em caso de nome composto primeira letra minuscula, segundo nome com letra Maiuscula
/*Evitar numeros nas variaveis, ou nunca iniciar com numeros
Caracteres especiais apenas underline (_) */
//verificar Php Documentor

$anoNasc = 1982;
$nSimples01 = "Emenson";
$sobreNome = "Reis";
$nCompleto = $nSimples01 . " " . $sobreNome;

// Concatenar variáveis: Use o ponto .

echo $nCompleto;
exit;
//
echo "<br/>";
//apagando variaveis
unset($nSimples01);

#echo $nSimples01;

if (isset($nSimples01)) {

    echo $nSimples01;
}


?>

