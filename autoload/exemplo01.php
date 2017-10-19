<?php
function __autoload($nomeClasse)
{
  // var_dump($nomeClasse); Para verificar quais classes foram chamadas
  require_once("$nomeClasse.php");
}
$carro = new DelRey();
$carro->acelerar(80);
?>
