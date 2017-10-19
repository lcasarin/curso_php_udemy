<?php
abstract class Animal
{
  public function falar()
  {
    return "Som";
  }
  public function mover()
  {
    return "Anda";
  }
}

class Cachorro extends Animal
{
  public function falar()
  {
    return "Late";
  }
}

class Gato
{
  public function falar()
  {
    return "Mia";
  }
}

class Passaro extends Animal // se for chamar um metodo da classe pai com parent nao esquecer de
                            // chamar  com extends a classe Animal 
{
  public function falar()
  {
    return "Canta";
  }
  public function mover()
  {
    return "Voa e " . parent::mover(); //parent para chamar o metodo da classe pai
  }
}

$pluto = new Cachorro();
echo $pluto->falar(). "<br/>" .$pluto->mover();

echo "<br/> <hr>";

$garfield = new Gato();
echo $garfield->falar(). "<br/>" .$pluto->mover();

echo "<br/> <hr>";

$ave = new Passaro();
echo $ave->falar() . "<br/>" .$ave->mover();
?>
