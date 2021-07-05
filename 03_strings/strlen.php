<?php 

$frase = "A repetição é a mãe da retenção.";

$palavra = "mae";

$q = strpos($frase, "mãe"); // IDENTIFICA O VALOR DO INÍCIO DA PALAVRA PESQUISADA

$texto = substr($frase, 0, $q); // ATRIBUI NA VARIÁVEL O LIMITE DEFINIDO 

var_dump($q);
echo "</br>";
var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // STRLEN retorna o tamanho de uma string
echo "</br>";

var_dump($texto2);
?>