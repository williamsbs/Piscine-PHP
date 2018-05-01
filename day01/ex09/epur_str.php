#!/usr/bin/php
<?php
if ($argc == 2)
{
  $elem = trim($argv[1]);
  // $tab = str_ireplace("  ", " ",$elem);
  while (strstr($elem, "  "))
	{
		   $elem = str_ireplace("  ", " ", $elem);
	}
    echo $elem;
}
?>
