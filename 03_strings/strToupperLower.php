<?php

$nome = "Danilo Lima";

$nome = strtoupper($nome); // COLOCA A VARIÁVEL EM CAIXA ALTA
echo $nome;

echo "</br>";
$nome = strtolower($nome); // COLOCA A VARIÁVEL EM CAIXA BAIXA
echo $nome;

echo "</br>";
$nome = ucfirst($nome); // PRIMEIRA LETRA DA PRIMEIRA PALAVRA APENAS
echo $nome;

echo "</br>";
$nome = ucwords($nome); // PRIMEIRA LETRA DE CADA PALAVRA EM CAIXA ALTA
echo $nome;


?>