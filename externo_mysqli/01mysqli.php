<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error){

    echo "Error: " . $conn->connect_error;

}

$stmt = $conn->prepare("INSERT INTO usuarios (deslogin, dessenha) VALUES(?,?)");


// $stmt->bind_param("ss", "user", "12345");  // temos q passar os valores por referência , criando variaveis para alocar na memória e alterar no escopo da classe
$stmt->bind_param("ss", $login, $pass);


$login = "user";
$pass = "senhanova123"; // não temos problemas em declarar as variaveis depois do comando acima, pois esse é um execute, que no caso apenas dispara o comando ao final.
//esta rebebendo o tipo de dado selecionado acima ("INSERT INTO usuarios (deslogin, dessenha) VALUES(?,?)");, no caso ss, string, string

$stmt->execute();


$login = "daniloprogrammer";
$pass = "k2@fGy%JX";

$stmt->execute();
?>