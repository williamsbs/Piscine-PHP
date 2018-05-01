#!/usr/bin/php
<?php
function ft_split($s1)
{
  $tab = explode (" ", $s1);
  if ($s1 != NULL)
  {
    sort ($tab);
  }
  return ($tab);
}
print_r(ft_split("Hello   World AAA"));
?>
