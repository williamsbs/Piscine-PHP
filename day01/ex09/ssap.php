#!/usr/bin/php
<?php
function ft_split($s1)
{
  $tab = explode (" ", $s1);
  sort($tab);
  return ($tab);
}
foreach ($argv as $elem)
{
  if ($elem != $argv[0])
  {
    $tab = ft_split($elem);
  }
}
sort($tab);
foreach ($tab as $ele)
{
  echo $ele;
  echo "\n";
}
?>
