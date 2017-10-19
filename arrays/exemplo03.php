<?php
//array bidimencional
$pessoas = array();
array_push($pessoas, array(
  'nome' => 'Lucas',
  'idade' => 20
));
array_push($pessoas, array(
  'nome' => 'Paulo',
  'idade' => 21
));
//print_r($pessoas);
foreach ($pessoas as $pessoa) {
echo "Meu nome e: " .$pessoa['nome'] . "<br>" . "Minha idade e: " .$pessoa["idade"] ."<br>";
}

?>
