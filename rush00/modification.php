<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Modifier un compte</title>
	</head>
	<body>
		<form method="POST" action="modif.php">
			Identifiant: <input type="text" name="login" value="">
		</br>
			Ancien mot de passe: <input type="text" name="oldpw" value="">
		</br>
			Nouveau mot de passe: <input type="text" name="newpw" value="">
			<input type="submit" name="submit" value="OK">
		</form>
	</body>
</html>