<?php
//setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
//echo ucwords(strftime("%A %B"));


setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

date_default_timezone_set('America/Sao_Paulo');

$dataHoje = strftime('%A, %d de %B de %Y', strtotime('today'));

echo $dataHoje;

// setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
//
// echo utf8_encode(strftime("%A %B"));

// Diferença de data() e strftime()
//A função strftime, permite formatar as datas com mais recursos,
// por exemplo permite que o nome do mês e do dia da semana venham de
// acordo com o idioma determinado na propriedade setlocale,
// por exemplo em português, já a função data, não permite esse recurso.


?>
