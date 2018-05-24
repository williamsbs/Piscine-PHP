<?php
include ('index.php');
if ($_POST["login"] != "" && $_POST["passwd"] != "" && $_POST["submit"] == "OK")
{
	$passwd = hash(sha512,$_POST["passwd"]);
	if (file_exists("../private") == FALSE)
	{
		mkdir ("../private", 0777, TRUE);
	}
	if (file_exists("../private/passwd") == FALSE)
	{
		$tab = array(array("login" => $_POST["login"], "passwd" => $passwd));
		$serialised = serialize($tab);
		file_put_contents("../private/passwd", $serialised);
		echo "Votre compte a ete cree";
	}
	else
	{
		$content = FALSE;
		$unserialised = unserialize(file_get_contents("../private/passwd"));
		foreach($unserialised as $elem)
		{
			if($elem["login"] == $_POST["login"])
			{
				$content = TRUE;
			}
		}
		if ($content == FALSE)
		{
			$unserialised[] = array("login" => $_POST["login"], "passwd" => $passwd);
			$new_serialized = serialize($unserialised);
			file_put_contents("../private/passwd", $new_serialized);
			echo "Votre compte a ete cree";
		}
		else
		{
			echo "Compte existe deja\n";
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Creer un compte</title>
	</head>
	<body>
		<h1>Cree un compte</h1>
		<div class="connection">
		<form method="POST" action="create.php">
			Identifiant: <input type="text" name="login" value="">
		</br>
			Mot de passe: <input type="password" name="passwd" value="">
		</br>
			<input type="submit" name="submit" value="OK">
		</form>
	</div>
	</body>
</html>
