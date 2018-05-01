#!/usr/bin/php
<?php
if ($argc < 3)
{
  if(preg_match("/([L|l]undi|[M|m]ardi|[M|m]ercredi|[J|j]eudi|[V|v]endredi|[S|s]amdi|[D|d]imam\nche)/", $argv[1]))
  {
    $time = preg_replace("/([L|l]undi |[M|m]ardi |[M|m]ercredi |[J|j]eudi |[V|v]endredi |[S|s]amdi |[D|d]imanche )/","", $argv[1]);
  }
  else {
    echo "Wrong Format";
    return;
}
  if(preg_match("/([J|j]anvier|[F|f]evrier|[M|m]ars|[A|a]vril|[M|m]ai|[J|j]uin|[J|j]uillet|[A|a]o[u|û]t|[S|s]eptembre|[O|o]ctobre|[N|n]ovembre|[D|d]ecembre)/", $argv[1]))
  {
    $time = explode(" ", $time);
    $len_year = strlen($time[2]);
    $len_day_num = strlen($time[0]);
    $len_time = strlen($time[3]);
    if ($len_year != 4 || !preg_match("#[1-9]#", $time[2]))
    {
      echo "Wrong Format";
      return;
    }
    if ($len_day_num > 2)
    {
      echo "Wrong Format";
      return;
    }
    if ($len_time != 8)
    {
      echo "Wrong Format";
      return;
    }
    if ($time[1] == "janvier" || $time[1] == "Janvier")
      $time[1] = " January ";
    if ($time[1] == "fevrier " || $time[1] == "Fevrier")
      $time[1] = " February ";
    if ($time[1] == "avril" || $time[1] == "Avril")
      $time[1] = " April ";
    if ($time[1] == "mai" || $time[1] == "Mai")
      $time[1] = " May ";
    if ($time[1] == "juin" || $time[1] == "Juin")
      $time[1] = " June ";
    if ($time[1] == "juillet" || $time[1] == "Juillet")
      $time[1] = " July ";
    if ($time[1] == "aout" || $time[1] == "Aout" || $time[1] == "août" || $time[1] == "Août")
      $time[1] = " August ";
    if ($time[1] == "septembre" || $time[1] == "Septembre")
      $time[1] = " September ";
    if ($time[1] == "octobre" || $time[1] == "Octobre")
      $time[1] = " October ";
    if ($time[1] == "novembre" || $time[1] == "Novembre")
      $time[1] = " November ";
    if ($time[1] == "decembre" || $time[1] == "Decembre")
      $time[1] = " December ";
    $time = implode($time);
  }
  else
  {
    echo "Wrong Format";
    return;
  }
  $date = strtotime($time);
  $date = $date - 3600;
  echo $date;
}
else
  echo "Wrong number of parameters";
?>
