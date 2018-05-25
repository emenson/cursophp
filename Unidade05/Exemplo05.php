<?php

$json = '[{"nome":"Emenson","idade":36},{"nome":"Alessandra","idade":37}]';

$data = json_decode($json, true);

var_dump($data);

?>
