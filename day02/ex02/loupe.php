#!/usr/bin/php
<?php
$file_content = file_get_contents($argv[1]);
$delimiteur = explode("title", $file_content);
print_r($delimiteur);
?>
