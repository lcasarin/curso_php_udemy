<?php
//substr strpos função para pesquisar conteudo dentro de outras variaveis
//strlen para ler 
$frase = "A repetição é a mãe da retenção.";
$palavra = "mãe";
$q = strpos($frase, "mãe");
var_dump($q);
$texto = substr($frase, 0, $q);
echo "<br/>";
var_dump($texto);
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
echo "<br/>";
var_dump($texto2);
?>
