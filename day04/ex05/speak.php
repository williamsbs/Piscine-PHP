<?php
session_start();

echo $_SESSION["loggued_on_user"];
if (isset($_SESSION["loggued_on_user"]))
{
	echo oui;
	if(file_exists("../private") == FALSE)
	{
		mkdir("../private", 0777, TRUE);
	}
	if(file_exists("../private/chat") == FALSE)
	{
		$tab = array(array("login" => $_SESSION["loggued_on_user"], "msg" => $_POST["msg"], "time" => time()));
		print_r($tab);
		$serialised = serialize($tab);
		file_put_contents("../private/chat", $serailised);
	}
}
?>
