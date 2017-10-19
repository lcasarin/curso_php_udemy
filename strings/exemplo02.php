<?php
//Uppercase e outras paradas para texto
$name = "Lucas marquezini casarin";
$name = strtoupper($name);
echo $name;
$name = strtolower($name);
echo "<br/>";
echo $name;
echo "<br/>";
echo ucwords($name);
echo "<br/>";
echo ucfirst($name);
?>
