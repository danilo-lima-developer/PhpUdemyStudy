<?php


session_id('820cd00070bcc9a21c44cb2f4b17641e'); // RECUPERA A SESSÃO 



require_once("config.php");

session_regenerate_id(); // MUDA O ID DA SESSÃO

echo session_id();
echo "<br>";
var_dump($_SESSION);


?>