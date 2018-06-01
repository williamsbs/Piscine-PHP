<?php
session_start();
include ('header_admin.php');
if($_SESSION['loggued_on_user'] == "admin")
{
if ($_POST["login"] != "" && $_POST["passwd"] != "" && $_POST["submit"] == "OK")
{
	$passwd = hash(sha512,$_POST["passwd"]);
	// if (file_exists("../../private") == FALSE)
	// {
	// 	mkdir ("../../private", 0777, TRUE);
	// }
	// if (file_exists("../../private/passwd") == FALSE)
	// {
	// 	$tab = array(array("login" => $_POST["login"], "passwd" => $passwd));
	// 	$serialised = serialize($tab);
	// 	file_put_contents("../../private/passwd", $serialised);
	// 	echo "Votre compte a ete cree";
	// }
	// else
	// {
		$content = FALSE;
		$unserialised = unserialize(file_get_contents("../../private/passwd"));
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
			file_put_contents("../../private/passwd", $new_serialized);
			?>
			<h1>L'utilisateur ete ajouté</h1>
			<?php
		}
		else
		{
			?>
			<h1>Le compte existe deja</h1>
			<?php
		}
	// }
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Ajouter un utilisateur:</h1>
		<div class="connection">
		<form method="POST" action="add_user.php">
			Identifiant: <input type="text" name="login" value="">
		</br>
			Mot de passe: <input type="password" name="passwd" value="">
		</br>
			<input type="submit" name="submit" value="OK">
		</form>
	</div>
	</body>
</html>
