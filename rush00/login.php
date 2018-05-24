<?php
session_start();
include ('index.php');
include ('auth.php');
$i = 0;
if (auth($_POST["login"], $_POST["passwd"]) == TRUE)
{
	$passwd = hash(sha512, $_POST['passwd']);
	$_SESSION['loggued_on_user'] = $_POST['login'];
	$_SESSION['loggued_on_passwd'] = $passwd;
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>boutique</title>
	</head>
	<body>
		<h1>Vous etes connecté</h1>
	</body>
</html
<?php
}
if(auth($_POST["login"], $_POST["passwd"]) == FALSE && $_POST["submit"] == "OK")
{
	$_SESSION["loggued_on_user"] = "";
	echo "Identifiant ou Mot de passe incorrecte\n";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Connection</title>
	</head>
	<body>
		<h1>Connection</h1>
		<div class="connection">
		<form method="POST" action="login.php">
			Identifiant:<input type="text" name="login" value="" />
		</br>
			Mot de passe: <input type="password" name="passwd" value="" />
		</br>
			<input type="submit" name="submit" value="OK" />
		</form>
	</div>
	</body>
</html>
