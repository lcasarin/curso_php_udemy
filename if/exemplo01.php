<?php
$qualASuaIdade = 15;
$idadeCrianca = 13;
$idadeMaior = 18;
$idadeMelhor = 65;
if ($qualASuaIdade < $idadeCrianca)
{
echo "Crianca";
}
else if ($qualASuaIdade < $idadeMaior)
{
  echo "Adolecente";
}
else if ($qualASuaIdade < $idadeMelhor)
{
  echo "Adulto";
}
else
{
  echo "idoso";
}
echo "<br/>";
echo ($qualASuaIdade < $idadeMaior)? "menor de idade":"Maior de idade";

?>
