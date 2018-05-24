<?php

$nome = "Emenson";

function teste() {
    global $nome;
    echo $nome;
};

function teste2() {
    
    $nome = "Reis";
    echo $nome . " agora no teste2";

};

teste();
teste2();
?>