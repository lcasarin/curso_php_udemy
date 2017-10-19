<?php
// Toda classe comessa com a letra maiuscula
// Se for nome  composto todo comeco e maiusculo Ex: DateTime

class Pessoa
{
  public $nome; //Atributo

  public function falar() //Método
  {
    return "O meu nome é ".$this->nome;
  }
}
$lucas = new Pessoa();
// $lucas = new Pessoa; // Se estiver vazio pode deixar sem parenteses
$lucas->nome = "Lucas Casarin Marquezini";
echo $lucas->falar();

?>
