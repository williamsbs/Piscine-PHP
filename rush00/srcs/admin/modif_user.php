<?php
include ('header_admin.php');
if ($_POST["submit"] == "OK" && $_POST["newpw"] != NULL && $_POST["login"] != NULL)
{
	$oldpw = hash(sha512, $_POST["oldpw"]);
	$newpw = hash(sha512, $_POST["newpw"]);
	$content = unserialize(file_get_contents("../../private/passwd"));
	$i = 0;
	$changed = 0;
	foreach($content as $elem)
	{
		if ($elem["login"] == $_POST["login"] && $elem["passwd"] == $oldpw)
		{
			$content[$i]["passwd"] = $newpw;
			$changed = 1;
		}
		$i++;
	}
	if ($changed == 1)
	{
		$serialised = serialize($content);
		file_put_contents("../../private/passwd", $serialised);
		?>
		<h1>Mot de passe modifié</h1>
		<?php
	}
	elseif ($changed == 0)
	{
		?>
		<h1>Le compte existe pas</h1>
		<?php
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
		<h1>Modifier un compte:</h1>
		<div class="connection">
		<form method="POST" action="modif_user.php">
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
