<?php
// Métodos Mágicos
class Endereco
{
  private $logradouro;
  private $numero;
  private $cidade;

  public function __construct ($a, $b, $c)
  {
    $this->logradouro = $a;
    $this->numero = $b;
    $this->cidade = $c;

  }
  // Usado para liberar a variavel da memoria. Msm coisa do unset
  public function __destruct ()
  {
    //var_dump("Destruir");
  }
  // Metodo para converter para string
  public function __toString()
  {
    return $this->logradouro.", ".$this->numero." - ".$this->cidade;
  }

}

$meuEndereco = new Endereco("Rua Parigot de Souza", "140", "Guaíra-PR");
// var_dump($meuEndereco);
// unset($meuEndereco);
echo $meuEndereco;
?>
