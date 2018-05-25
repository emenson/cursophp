<?php
$condicao = true;

while ($condicao){

    $numero = rand(1, 200);

    if ($numero === 5){

        echo "CINCO!!!";
        $condicao = false;

    }

    echo $numero . " ";
}





?>