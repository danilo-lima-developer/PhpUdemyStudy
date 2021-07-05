<?php

$nome = "Danitech";
$sobrenome = "PE";
$nomeCompleto = $nome." ".$sobrenome;  // Unindo variáveis com espaçamento

echo $nomeCompleto;

echo "</br>";

echo $nome;

var_dump($nome); // tipo da variável e quanto está consumindo da memória

echo "</br>";

unset($nome); // remove a variável da memória 

if(isset($nome)){ // verificação de uma condição, caso a variável exista rode o código 

    echo $nome;
}


$usuario = "Danitech";
$site = 'www.danitech.com.br';
$ano = 1998;
$salario = 3450.99;
$bloqueado = false;
////////////////////////////////////////
$frutas = array("abacaxi","melão","jambo");

echo $frutas[1];

$nascimento = new DateTime();

echo "</br>";

//var_dump($nascimento);


$arquivo = fopen("variaveis.php", "r");

// var_dump($arquivo);


$nulo = NULL;
$vazio = ""; 
// Há uma diferença significativa nos dois tipos de variáveis acima, principalmente relacionada ao banco 
// de dados.





// comentário de linha
/*
comentário de bloco
*/

?>