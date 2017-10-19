<?php
for ($a = 0; $a < 10; $a++)
// {
//   echo $a ."<br/>";
// }
// for ($a = 0; $a < 1000; $a+=5)
// {
//   echo $a ."<br/>";
// }
for ($a = 0; $a < 1000; $a+=5)
{
  if ($a >= 200 && $a <= 800)continue;
  if ($a === 900)break;
  echo $a ."<br/>";
}
?>
