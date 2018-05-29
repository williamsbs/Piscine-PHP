<?php
session_start();
include ('index.php');
if ($_SESSION["loggued_on_user"] != "")
{
	$_SESSION["loggued_on_user"] = "";
	$_SESSION["loggued_on_passwd"] = "";
	?><html>
		<head>
			<meta charset="UTF-8">
			<title>boutique</title>
		</head>
		<body>
			<h1>Vous etes deconnecté</h1>
		</body>
	</html><?php
}
else
{
	?><html><body><h1>Vous n'êtes pas connecté</h1></body></html><?php
}
?>
