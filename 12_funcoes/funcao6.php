<?php

$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach($pessoa as &$value){ // PASSANDO O VALUE POR REFERÊNCIA, NO CASO VAI ALTERAR A VARIAVEL IDADE NO ARRAY $PESSOA
    if(gettype($value) === 'integer') $value += 10;
    echo $value. '<br>';
}

print_r($pessoa);

?>