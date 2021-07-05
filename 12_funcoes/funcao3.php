<?php

function ola($texto = "mundo", $periodo = "bom dia"){ // PARAMETROS QUE NAO TENHAM VALOR PADRÃO SEEEMPRE COLOQUE A ESQUERDAAAAA

    return "Ola $texto! $periodo<br>";

}

echo ola();
echo ola("", "Boa noite");
echo ola("Elizangela", "Boa tarde");
echo ola("João","");

?>