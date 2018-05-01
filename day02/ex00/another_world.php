#!/usr/bin/php
<?php
$trimed = trim($argv[1]);
$replaced = preg_replace('/[ \t]{2,}/', ' ', $trimed);
echo $replaced;
echo "\n";
?>
