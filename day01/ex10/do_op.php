#!/usr/bin/php
<?php
if ($argc == 4)
{
  $chiffre1 = trim ($argv[1]);
  $operateur = trim ($argv[2]);
  $chiffre3 = trim ($argv[3]);

  if ($operateur == "+")
  {
    echo $chiffre1 + $chiffre3;
  }
  if ($operateur == "-")
  {
    echo $chiffre1 - $chiffre3;
  }
  if ($operateur == "/")
  {
    echo $chiffre1 / $chiffre3;
  }
  if ($operateur == "*")
  {
    echo $chiffre1 * $chiffre3;
  }
  if ($operateur == "%")
  {
    echo $chiffre1 % $chiffre3;
  }
}
else
  echo "tu fais n'importe quoi";
?>
