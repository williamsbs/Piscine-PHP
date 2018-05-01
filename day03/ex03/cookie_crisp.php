<?php
if(isset($_GET["name"]) && isset($_GET["action"]))
{
	if($_GET["action"] == "del")
	{
		setcookie($_GET["name"], NULL, -1);
	}
	if($_GET["action"] == "set")
	{
		setcookie($_GET["name"], $_GET["value"], time() + (1 * 1 * 1 * 60));
	}
	if($_GET["action"] == "get")
	{
		if(isset($_COOKIE[$_GET["name"]]))
		{
			echo $_COOKIE[$_GET["name"]];
			echo "\n";
		}
	}
}
?>
