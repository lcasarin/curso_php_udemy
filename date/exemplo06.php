<?php
$dt = new DateTime();
$periodolucas = new DateInterval("P15D");
echo $dt->format("d/m/Y H:i:s");
$dt->add($periodolucas);
echo "<br> <hr>";
echo $dt->format("d/m/Y H:i:s");


// date_default_timezone_set("America/Sao_Paulo");
//
// $dt = new DateTime();
//
// $decrescimo = new DateInterval("P10D");
//
// $dt->sub($decrescimo);
//
// echo $dt->format("d/m/Y H:i:s");
//
// $acrescimo = new DateInterval("PT5H35S"); //nesta linha está dando erro, porque? Esse método não suporta mais de um valor?
//
// $dt->add($acrescimo);
//
// echo "<br>";
//
// echo $dt->format("d/m/Y H:i:s");
//


//Sistema para enviar mensagem quando terminar o tempo
// $dt = new DateTime(); //data atual
// $validade = new DateTime("2017-10-31"); //data do validade
// $interval = $validade->diff($dt);
// if ($interval->days < 30) {
//  echo "mensagem";
// }

?>
