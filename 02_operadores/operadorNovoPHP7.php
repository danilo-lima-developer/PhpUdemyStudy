<?php

$a = 35;
$b = 25;

var_dump($a <=> $b); // 1 0 -1 

echo "</br>";

$c = null;
$d = null;
$e = 25;

echo $c ?? $d ?? $e; // UMA CONDIÇÃO QUE IGNORA OS VALORES NULOS (E NÃO MOSTRA MENSAGEM DE ERRO) E SÓ 
// PARA QUANDO ENCONTRAR O VALOR, NO CASO DO EXEMPLO 25;


?>