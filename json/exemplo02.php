<?php
$json = '[{"nome":"Lucas","idade":20},{"nome":"Paulo","idade":21}]';
$data = json_decode($json, true);
var_dump ($data);
?>
