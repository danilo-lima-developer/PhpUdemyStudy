<?php

$nome = "Danilo";

function teste(){
    global $nome;
    echo $nome;

}

function teste2(){
    $nome = "Maria";
    echo $nome." É amiga de "."Danilo";
}

teste();
echo "</br>";
teste2();
?>