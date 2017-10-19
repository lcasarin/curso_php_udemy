<?php
//http://php.net/manual/pt_BR/functions.anonymous.php
//Funções Anônimas
function teste($callback_qualquer_coisa)
{
  //Processo lento
  $callback_qualquer_coisa();
}
teste(function()
{
  echo "Finalizado com sucesso!";
}
)
?>
