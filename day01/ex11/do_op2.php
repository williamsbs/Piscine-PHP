#!/usr/bin/php
<?php
// $chiffre1 = trim ($argv[1]);
// $operateur = trim ($argv[2]);
// $chiffre3 = trim ($argv[3]);

if ($argc != 2)
{
	echo "Incorrect Parameters\n";
}
// $op = explode(";", "+;-;*;/;%");
$cal = sscanf($argv[1], "%d %c %d");
if ($cal[0] && $cal[1] && $cal[2])
{
  if ($cal[1] == "+")
    echo $cal[0] + $cal[2];
  if ($cal[1] == "-")
    echo $cal[0] - $cal[2];
  if ($cal[1] == "/")
    echo $cal[0] / $cal[2];
  if ($cal[1] == "*")
    echo $cal[0] * $cal[2];
  if ($cal[1] == "%")
    echo $cal[0] % $cal[2];
}
else
  echo "tu fais n'importe quoi";
?>
