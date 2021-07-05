<?php
// UTILIZANDO DUAS CLASSES PARA OBTER E ACRESCENTAR TEMPO NA DATA.
$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>