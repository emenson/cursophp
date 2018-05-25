<?php

$qualASuaIdade = 11;
$idadeCrianca = 12;
$idadeMaior = 18;
$melhorIdade = 65;

if ($qualASuaIdade < $idadeCrianca) {

    echo "Criança";

} elseif ($qualASuaIdade < $idadeMaior){

    echo "Adolescente";
} elseif ($qualASuaIdade < $melhorIdade){

    echo "Adulto";
} else {

    echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade"


?>