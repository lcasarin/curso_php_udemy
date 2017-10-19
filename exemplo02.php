<?php
/*
$anoNascimento = 1990;
$nomeCompleto = "";
*/
//Na linha de baixo temos uma variavel com numero no nome
$nome1 ="Lucas";
$sobrenome="Casarin";
$nomeCompleto = $nome1 . " ". $sobrenome;
echo $nome1;
exit;
//exit para o codigo aonde colocado
echo "<br/>";
//unset($nome1);
//unset tira o valor da variavel deixa ela livre deleta a variavel
//isset mostra se a variavel esta definida verifica se a variavel tem aquele valor
if(isset($nome1)){
  echo $nome1;
}
echo "<br/>".$nomeCompleto;
 ?>
