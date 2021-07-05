<?php

$condicao = true;

while ($condicao) { // Bastante utilizado em banco de dados, quando não sabemos a quantidade de vezes que o programa vai repetir

    $numero = rand(1, 10);
    if($numero === 3){
        echo "TRÊS!!!<br>";
        $condicao = false;
    }

    echo $numero. "<br>";
}

?>