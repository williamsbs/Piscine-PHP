<?php
date_default_timezone_set('Europe/Paris');
if (file_exists("../private/chat") == TRUE)
{
	$content = unserialize(file_get_contents("../private/chat"));
	foreach ($content as $elem)
	{
		$time = date("H:i",$elem["time"]);
		echo "[";
		echo $time;
		echo "]";
		echo $elem["login"];
		echo ": ";
		echo $elem["msg"];
		echo "</br>";
	}
}
?>
