<?php
// Passagem de valor por Referência
$a = 10;
function trocaValor(&$b)
{
  $b += 50;
  //$a = 50; vai retornar 50
  return $b;
}
echo $a."<br>";
echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";
?>
