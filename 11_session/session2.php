<?php

require_once("config.php");

// session_unset($_SESSION['nome']); LIMPA A VARIAVEL DE SESSÃ

echo $_SESSION['nome'];

session_destroy(); // LIMPA VARIAVEL E REMOVE O USUÁRIO, ENTÃO SE APERTAR F5, É COMO SE FOSSE UM NOVO ACESSO
?>