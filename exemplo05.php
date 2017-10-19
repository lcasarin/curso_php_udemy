<?php
// Variaveis e escopo de variavel
$nome = "Lucas";
function teste()
{
  global $nome;
  echo $nome;
}
function teste2()
{
  $nome = "pedro";
echo $nome." agora no teste 2";
}
teste();
teste2();
 ?>
