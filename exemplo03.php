<?php
//compostos array e objetos
$nome = "Lucas";
$site = 'www.sp-travel.com.br';
$ano = 1990;
$salario = 5500.98;
$bloqueado = false;
//////////////////////////////////////////
$frutas = array("pera", "uva", "maracuja" );
echo $frutas[1]. "<br/>";
/*
No caso, var_dump vem de variable dump, ou seja, despejar variável. O que significa despejar as informações de uma variável

Unset seria como "desdefinir". Isso significa que essa função deixa a variável sem definição
*/
$nascimento = new DateTime();
var_dump($nascimento, "<br/>");
$arquivo =fopen("exemplo03.php", "r");
var_dump($arquivo);
$nulo = NULL;
$vazio ="";
 ?>
