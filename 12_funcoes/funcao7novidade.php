<?php

function soma(int ...$valores){
    return array_sum($valores);

}

echo soma(2,50);
echo "<br>";
echo soma(9.5,50);
echo "<br>";
echo soma(1.5,3.2); // IGNORA O PONTO FLUTUANTE, POIS NA FUNÇÃO ESTAMOS DEFININDO O INT

?>