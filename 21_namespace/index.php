<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro;

$cad->setNome("Bruna Santos");
$cad->setEmail("brunasantos@gmail.com");
$cad->setSenha("123456");


echo $cad; // como temos uma método toString na classe cadastro, podemos apresentá-lo estanciando o objeto .
$cad->registrarVenda();

?>