<?php
include ('index.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Connection</title>
	</head>
	<body>
		<h1>Connection:</h1>
		<div class="connection">
		<form method="POST" action="login.php">
			Identifiant:<input type="text" name="login" value="" />
		</br>
			Mot de passe: <input type="text" name="passwd" value="" />
		</br>
			<input type="submit" name="submit" value="OK" />
		</form>
	</div>
	</body>
</html>
