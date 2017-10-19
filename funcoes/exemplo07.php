<?php
function soma(int ...$valores)
{
  return array_sum($valores);
}
echo soma(2,2);
echo "<br>";
echo soma(28,61);
echo "<br>";
echo soma(580,787);
echo "<br>";
echo soma(2.9,5.7);
echo "<br>";
?>
