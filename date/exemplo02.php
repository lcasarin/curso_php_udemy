<?php
// converte uma string(str) para timestamp
//$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
//$ts = strtotime("+1 week");
$ts = strtotime("+1 month");

echo date("l, d/m/Y", $ts);

?>
