<?php

//Diferença entre include e Require 
//Require exige que o arquivo exista e funcione
//Include tenta fazer o arquivo funcionar, e procura tbm no Path Inc.
//Sem usar o include Path, prefira usar o Require
//Include permite utilizar um arquivo de um Site remoto

require_once "Exemplo01.php";

require_once "Exemplo01.php";

$resultado = somar(10, 20);

echo $resultado;

?>
