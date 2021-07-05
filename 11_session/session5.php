<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){

    case PHP_SESSION_DISABLED:
        echo "AS SESSÕES ESTÃO DESABILITADAS!";
    break;

    case PHP_SESSION_NONE:
        echo "AS SESSÕES ESTIVEREM HABILITADAS, MAS NENHUMA EXISTIR!";
    break;

    case PHP_SESSION_ACTIVE:
        echo "AS SESSÕES ESTIVEREM HABILITADAS, E UMA EXISTIR!";
    break;
     
}

?>