<?php
//http://php.net/manual/pt_BR/book.spl.php
//Funcoes spl
// Funcao para incluir classes de pastas e de arquivos

//Pegando arquivo DelRey
function incluirClasses($nomeClasse)
{
  if (file_exists($nomeClasse.".php") === true) // verifica se o arquivo existe
  {
    require_once($nomeClasse.".php");
  }
}
spl_autoload_register("incluirClasses");

//Pegando arquivo Automovel
spl_autoload_register(function($nomeClasse)
{
  // DIRECTORY_SEPARATOR usado como barra para dividir os diretorios
  //"Abstratas"  O nome da pasta
  if (file_exists("Abstratas" .DIRECTORY_SEPARATOR. $nomeClasse.".php") === true) // verifica se o arquivo existe
  {
    require_once("Abstratas" .DIRECTORY_SEPARATOR. $nomeClasse.".php");
  }
});
$carro = new DelRey();
$carro->acelerar(80);
?>
