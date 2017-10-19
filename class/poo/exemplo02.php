<?php
class Carro
{
  private $modelo;
  private $motor;
  private $ano;

  public function getModelo()
  {
    return $this->modeloqueeuquiser;
  }

  public function setModelo($modelo)
  {
    $this->modeloqueeuquiser = $modelo;
  }

  public function getMotor()
  {
    return $this->motorqueeuquiser;
  }

  public function setMotor($motor)
  {
    $this->motorqueeuquiser = $motor;
  }

  public function getAno():int
  {
    return $this->anoqueeuquiser;
  }

  public function setAno($ano)
  {
    $this->anoqueeuquiser = $ano;
  }

  public function mostrar()
  {
    return array
    (
      "modeloqueeuquiser"=>$this->getModelo(),
      "motorqueeuquiser"=>$this->getMotor(),
      "anoqueeuquiser"=>$this->getAno()
    );
  }
}
$tesla = new Carro();
$tesla->setModelo("Tesla P270");
$tesla->setMotor("Top d+");
$tesla->setAno("2019");
//Comando para mostrar o array
// print_r($tesla->mostrar());
var_dump($tesla->mostrar());

?>
