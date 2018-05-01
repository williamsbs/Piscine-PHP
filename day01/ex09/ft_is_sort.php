#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
  $str = $tab;
  sort($tab);
  if(implode(" ", $tab) == implode(" ", $str))
    return TRUE;
  return FALSE;
}
?>
