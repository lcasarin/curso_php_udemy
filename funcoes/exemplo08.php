<?php
//Funções no PHP 7 Novidades
function soma(float ...$valores):float
{
  return array_sum($valores);
}
echo var_dump(soma(2,2));
echo "<br>";
echo soma(28,61);
echo "<br>";
echo soma(580,787);
echo "<br>";
echo soma(2.9,5.7);
echo "<br>";
?>
