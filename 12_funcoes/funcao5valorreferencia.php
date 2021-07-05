<?php //PASSAGEM DE PARÂMETRO POR VALOR, NÃO ALTERA O VALOR DA VARIÁVEL
     // JÁ PASSAGEM DE PARÂMETRO POR REFERÊNCIA ALTERA O VALOR DA VARIÁVEL , NO CASO PRECISAMOS ADICIOANR '&' ex: &$a

$a = 10; // VARIÁVEL

function trocaValor(&$a){ // $a => PARÂMETRO DE FUNÇÃO; variável e parâmetro de função são duas coisas distintas.
    $a += 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo $a;

?>