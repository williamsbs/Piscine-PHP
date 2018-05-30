<?php
session_start();
include ('header_connection.php');
$passwd = hash(sha512, $_POST["passwd"]);
$content = unserialize(file_get_contents("../../private/passwd"));
$i = 0;
foreach($content as $elem)
{
	if ($elem["login"] == $_SESSION['loggued_on_user'] && $passwd == $_SESSION['loggued_on_passwd'])
	{
		$_SESSION["loggued_on_user"] = "";
		$_SESSION["loggued_on_passwd"] = "";
		unset($content[$i]);
		$serialised = serialize($content);
		file_put_contents("../../private/passwd", $serialised);
		echo "Votre compte a ete supprimer";
	}
	$i++;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Suppimer le compte:</h1>
		<div class="connection">
		<form method="POST" action="supprimer.php">
			Identifiant:<input type="text" name="login" value="" />
		</br>
			Mot de passe: <input type="password" name="passwd" value="" />
		</br>
			<input type="submit" name="submit" value="OK" />
		</form>
	</div>
	</body>
</html>
