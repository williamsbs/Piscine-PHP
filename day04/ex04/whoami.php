<?php
session_start();
echo $_SESSION["loggued_on_user"];
if ($_SESSION["loggued_on_user"] != "")
{
	echo $_SESSION["loggued_on_user"];
	echo "\n";
}
else
{
	echo "ERROR\n";
}
?>


// ne fonctione pas ! rien n'est mi dans le cookie donc il ne trouve pas le loggued_on_user.
