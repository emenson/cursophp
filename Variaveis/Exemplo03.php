<?php
/*Tipos de dados
Basicos: Inteiro, String, ponto flutuante, boleano (True or False);
Compostos: Array, Objeto
Especiais: Resource, null
*/
///////////////TIPOS BASICOS////////////
//String

$nome = "Emenson";
$site = 'www.valorum.com.br';

//Numero

$ano = 2018;

//Ponto Flutuante

$salario = 10000.99;

//Boleano

$bloqueado = false;

//////////////////////////////////////

///////////////TIPOS ESPECIAIS///////

//ARRAY

$frutas = array("limao", "maça", "uva", "kiwi");

echo $frutas[1];

//OBJETO

$dNascimento = new DateTime();

var_dump($dNascimento);
///////////////////////////////////////

/////////////TIPOS ESPECIAIS///////////
//RESOURCE
$arquivo = fopen("exemplo03.php", "r");

var_dump($arquivo);

//NULL

$nulo = NULL;

// Nulo é a ausência de valor, vazio quer dizer que tem espaço reservado.

?>