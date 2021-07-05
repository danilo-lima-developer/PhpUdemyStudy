<?php
// include "include.php"; //Tenta funcionar mesmo se o arquivo não existir ou não funciona corretamente, e também possui mais recursos, bom para trabalhos em equipe . E usa o  include_path para procurar arquivos que não encontrar
require "include.php"; //  RECOMENDADO ------ 
//BRIGA QUE O ARQUIVO EXISTA E ESTEJA FUNCIONANDO CORRETAMENTO, CASO CONTRAŔIO APRESENTARÁ ERRO FATAL
require_once "include.php"; // evia que o arquivo seja carregado duas vezes
$resultado = somar(10, 5);
echo $resultado;

?>