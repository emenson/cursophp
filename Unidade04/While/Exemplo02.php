<?php

$total = 150;
$desconto = 0.9; //10% de desconto no total

do  {

    $total *= $desconto;

} while ($total >100);

echo $total;



?>