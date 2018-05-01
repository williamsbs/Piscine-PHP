#!/usr/bin/php
<?php
$curl_init = curl_init($argv[1]);
$curl_ex = curl_exec($curl_init);
$file = file_get_contents($argv[1]);
echo $file;
?>
