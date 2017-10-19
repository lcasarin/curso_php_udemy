<?php
// Classe abstrata
// As classes abstratas não
//podem ser instanciadas, e qualquer classe que contenha ao menos
//um método abstrato também deve ser abstrata.
//Ou seja nao pode ser chamda direto apenas por extends de outra classe
interface Veiculo
{
  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);
}
abstract class Automovel implements Veiculo
{
public function acelerar($velocidade1)
{
  echo "O veiculo acelerou até ". $velocidade1." km/h";
}
public function frenar($velocidade1)
{
  echo "O veiculo frenou até ". $velocidade1." km/h";
}
public function trocarMarcha($marcha)
{
  echo "O veiculo engatou a marcha ". $marcha;
}
}
class DelRey extends Automovel
{
  public function empurrar()
  {

  }
}
$carro = new DelRey();
//$carro = new Automovel();
$carro->acelerar(200);

?>
