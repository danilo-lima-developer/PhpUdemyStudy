<?php

function ola(){ // QUANDO NÃO HÁ UM RETURN, É CONSIDERADA UMA SUB ROTINA NÃO FUNÇÃO.

    echo "Olá mundo"; 


}

ola();



function ola2(){ // QUANDO NÃO HÁ UM RETURN, É CONSIDERADA UMA SUB ROTINA NÃO FUNÇÃO.

    return "Olá mundo.<br>"; 


}
echo ola2();


$frase = ola2(); 
echo strlen($frase);
?>