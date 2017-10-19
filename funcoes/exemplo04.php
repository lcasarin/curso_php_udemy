<?php
//Parâmetros por Valor
function hello()
{
  $argumentos = func_get_args();
  return $argumentos;
}
var_dump(hello("Boa Madrugada", 50, true));
?>
