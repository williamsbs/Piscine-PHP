<?php
session_start();
include ("header.php");
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>
<?PHP
$data = "../private/data";
$content = unserialize(file_get_contents($data));
$_SESSION['nb_articles'] = count($_SESSION['panier']);
if ($_SESSION['nb_articles'] != 0)
{
		$total = 0;
		echo "<table class='recap_panier'>";
		echo "<tr><th>Articles: </th><th>Quantite: </th><th>Prix: </th><tr/>";
		foreach ($_SESSION['panier'] as $elem)
		{
			$id = $elem - 1;
			echo "<tr><td>".$content[$id][1].":</td><td>1</td><td>".$content[$id][5]."</td><tr/>";
			$total += $content[$id][5];
		}
		echo "<tr><td></td><td>Total:</td><td>".$total."€</td><tr/>";
		echo "</table>";
		if ($_SESSION['loggued_on_user'] != "")
		{
			$_SESSION['historique'] = $_SESSION['panier'];
			// unset($_SESSION['panier']);
			$_SESSION['nb_articles'] = 0;
			echo "<form action='commande.php' method='post'>";
			echo "<input type='submit' name='compte' value='Acheter' />";
			echo "</form>";
		}
		else if ($_SESSION['loggued_on_user'] == "")
		{
			echo "<form action='connection/login.php' method='post'>";
				echo "<input type='submit' name='pas-compte' value='Vous êtes pas connecté' />";
			echo "</form>";
		}
		?>
		<a class='admin-users' href="vide_panier.php">Vider le panier </a>
		</body>
		</html>
		<?php
}
else
{
	echo "<h1>Votre panier est vide</h1>";
}
?>
