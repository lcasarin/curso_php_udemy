<?php

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
?>
