#!/usr/bin/php
<?php

function ft_destroy_espace($tab)
{
  $elem = trim($tab);
  while (strstr($elem, "  "))
	{
		   $elem = str_ireplace("  ", " ", $elem);
	}
    return($elem);
}
$tab = ft_destroy_espace($argv[1]);
$tab1 = explode(" ", $tab);
$count = count($tab1) - 1 ;
$tmp = $tab1[0];

$tab1[0] = $tab1[$count];
$tab1[$count] = $tmp;
echo(implode(" ", $tab1));
?>
