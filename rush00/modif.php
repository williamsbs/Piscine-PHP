<?php
include ('index.html');
if ($_POST["submit"] == "OK" && $_POST["newpw"] != NULL && $_POST["login"] != NULL)
{
	$oldpw = hash(sha512, $_POST["oldpw"]);
	$newpw = hash(sha512, $_POST["newpw"]);
	$content = unserialize(file_get_contents("../private/passwd"));
	$i = 0;
	$changed = 0;
	foreach($content as $elem)
	{
		if ($elem["login"] == $_POST["login"] && $elem["passwd"] == $oldpw)
		{
			$content[$i]["passwd"] = $newpw;
			$changed = 1;
		}
		if ($elem["passwd"] != $oldpw)
		{
			echo "L'Ancier mot de passe est incorrecte\n";
		}
		$i++;
	}
	if ($changed == 1)
	{
		$serialised = serialize($content);
		file_put_contents("../private/passwd", $serialised);
		echo "Mot de passe modifier\n";
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Modifier un compte</title>
	</head>
	<body>
		<h1>Modifier son compte</h1>
		<div class="connection">
		<form method="POST" action="modif.php">
			Identifiant: <input type="text" name="login" value="">
		</br>
			Ancien mot de passe: <input type="password" name="oldpw" value="">
		</br>
			Nouveau mot de passe: <input type="password" name="newpw" value="">
			<input type="submit" name="submit" value="OK">
		</form>
	</div>
	</body>
</html>
