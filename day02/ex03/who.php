#!/usr/bin/php
<?php
$user = get_current_user();
$user = $user . " ";
$file = file_get_contents("/var/run/utmpx");
$sub = substr($file, 1256);
$tab_data = 'a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad';
while($sub != NULL)
{
  $array = unpack($tab_data, $sub);
  $date = date("M j H:i", $array["time1"]);
  $line = $array[line];
  $line = $line . "  ";
  $tab = array($user, $line, $date);
  $who = implode($tab);
  echo "$who\n";
$sub = substr($sub, 628);
}
?>
