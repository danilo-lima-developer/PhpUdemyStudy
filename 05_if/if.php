<?php

$suaIdade = 77;

$idadeCrianca = 12;
$idadeMaior = 18;
$idademelhor = 65;

if ($suaIdade < $idadeCrianca){
    echo "Criança";
} else if ($suaIdade < $idadeMaior){
    echo "Adolecente";
} else if ($suaIdade < $idademelhor){
    echo "Adulto";
} else {
    echo "Idoso";
}
echo "</br>";

echo($suaIdade<$idadeMaior)?"menor idade":"maior idade";
?>