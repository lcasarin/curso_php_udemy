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
echo json_encode($pessoas);

?>
