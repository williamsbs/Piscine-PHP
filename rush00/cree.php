<?php
include ('index.html');
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
			Mot de passe: <input type="text" name="passwd" value="">
		</br>
			<input type="submit" name="submit" value="OK">
		</form>
	</div>
	</body>
</html>
