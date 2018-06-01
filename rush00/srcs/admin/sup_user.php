<?php
session_start();
include ('header_admin.php');
$passwd = hash(sha512, $_POST["passwd"]);
$content = unserialize(file_get_contents("../../private/passwd"));
$i = 0;
foreach($content as $elem)
{
	if ($elem["login"] == $_POST["login"] && $passwd == $elem["passwd"])
	{
		$content[$i]["login"] = "";
		$_content[$i]["passwd"] = "";
		unset($content[$i]);
		$serialised = serialize($content);
		file_put_contents("../../private/passwd", $serialised);
		?>
		<h1>Le compte a ete supprimer</h1>
		<?php
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
		<h1>Suppimer un compte:</h1>
		<div class="connection">
		<form method="POST" action="sup_user.php">
			Identifiant:<input type="text" name="login" value="" />
		</br>
			Mot de passe: <input type="password" name="passwd" value="" />
		</br>
			<input type="submit" name="submit" value="OK" />
		</form>
	</div>
	</body>
</html>
