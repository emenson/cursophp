<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Emenson',
    'idade' => 36

));

array_push($pessoas, array(
    'nome' => 'Alessandra',
    'idade' => 37

));

echo json_encode($pessoas);
?>