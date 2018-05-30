<?PHP session_start(); ?>
<?PHP include ("header.php"); ?>
<!DOCTYPE html>
<html>
<body>
<h1>Bonjour <?php echo $_SESSION['loggued_on_user'] ?>, Votre commande a bien ete effectuer:</h1>

<h2>Ma Commandes:</h2>
<?PHP
if ($_POST['compte'] == "Acheter" || ((count($_SESSION['historique'])) != 0))
{
	$file = "../private/data";
	$unserialized = unserialize(file_get_contents($file));
	$_SESSION['nb_articles'] = count($_SESSION['historique']);
	if ($_SESSION['nb_articles'] != 0)
	{
		$total = 0;
		echo "<table class='recap_panier'>";
		echo "<tr><th>Articles</th><th>Quantite</th><th>Prix</th><tr/>";
		foreach ($_SESSION['historique'] as $elem)
		{
			$id = $elem - 1;
			echo "<tr><td>".$unserialized[$id][1]."</td><td>1</td><td>".$unserialized[$id][5]."</td><tr/>";
			$total += $unserialized[$id][5];
		}
		echo "<tr><td></td><td>Total</td><td>".$total."</td><tr/>";
		echo "</table>";
		$_SESSION['nb_articles'] = 0;
	}
	else
	{
	echo "<p>Votre panier est vide</p>";
	}
}
else
{
	echo"<p>Auncune commande</p>";
}
unset($_SESSION['panier']);

?>
</body>
</html>
