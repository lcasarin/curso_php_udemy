<?php
//include funciona msm que o arquivo nao exista e que nao esteja funcinando e tem mais recursos ex:includepath
//require obriga que o arquivo exista e esteja funcinando corretamente senao ele gera um fatal error
// require_once chama o arquivo apenas uma vez, se ja foi chamado nao chamara novamente
//A diferença principal entre include_once e require_once que você deve memorizar é que require_once para quando
// algum erro ocorre, não executando o restante do código. Já o include_once continua executando.
//E ambos solicitam os arquivos apenas uma vez


//include "inc/exemplo01.php";
require_once "inc/exemplo01.php";
require_once "inc/exemplo01.php";
$resultado = somar(10, 56);
echo $resultado;
?>
