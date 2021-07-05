<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error){

    echo "Error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM usuarios ORDER BY deslogin");


$data = array(); // transformando os dados em um json para poder usar em aplicacoes

while($row = $result->fetch_array(MYSQLI_ASSOC)){ // lista todo conteúdo da tabela selecionada com o comando fetch

    array_push($data, $row); 
    

}


echo json_encode($data);
?>