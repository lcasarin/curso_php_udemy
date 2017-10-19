<?php
// first line of PHP
//$defaultTimeZone='UTC';
//if(date_default_timezone_get()!=$defaultTimeZone)) date_default_timezone_set($defaultTimeZone);
//http://php.net/manual/pt_BR/function.date.php
// principal diferenca entre if e switch e que eu ja sei as opcoes que podem acontecer ou nao
$diaDaSemana =  8; //date("w");
$diaDoMes = date("d");
//echo $diaDoMes;
switch ($diaDaSemana)
{
  case 0:
  echo "Domingo";
  break;
  case 1:
  echo "Segunda";
  break;
  case 2:
  echo "Terca";
  break;
  case 3:
  echo "Quarta";
  break;
  case 4:
  echo "Quinta";
  break;
  case 5:
  echo "Sexta";
  break;
  case 6:
  echo "Sabado";
  break;
  default:
  echo "Data invalida";
  break;
}
?>
