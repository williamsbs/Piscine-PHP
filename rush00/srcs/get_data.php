<?php
$data = file("csv/database.csv");
unset($data[0]);
foreach($data as $elem)
{
	$info = explode(",", $elem);
	$tab_info[] = $info;
}
$serialised = serialize($tab_info);
file_put_contents("private/data", $serialised);
?>
