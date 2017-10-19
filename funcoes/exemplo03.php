<?php
//Parâmetros de funções
function ola($texto="Boa Madrugada", $periodo)
{
  return "Olá $texto! $periodo<br>";
}
echo ola("Mundo", "xxxx");
echo ola("", "ashjkashakjls");
echo ola("Chato", "teste com nada");
echo ola("Da Porra", "");
?>
