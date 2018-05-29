<?php
session_start();
include ("index.php"); ?>
<!DOCTYPE html>
<html>
<body>

    <?php
    $data = unserialize(file_get_contents("../private/data"));
    $flag = 0;
    $id = $_GET[produit] - 1;
    foreach ($data as $elem)
    {
        if ($elem[0] == $_GET[produit])
          $flag = 1;
    }
	?>
	<h1><?php echo $data[$id][1];?></h1>
	<?php
    if (isset($_GET[produit]) && $_GET[produit] != NULL &&
    $_GET[produit] >= 0 && is_numeric($_GET[produit]) && $flag == 1)
    {
		echo "<a class='admin-users' href='Articles.php?id=".$id."&categorie=".$data[$id][2]."'>← Revenir à la liste</a><br/><br/>";
		echo "<div class='responsive'>";
		echo "<div class='aff_prod'>";
		echo "<table>";
		echo "<tr><td class='produit'>".$data[$id][1]."</td><tr/>";
		echo "<tr><td><img src='".$data[$id][6]."'></td><tr/>";
		echo "<tr><td>Categorie : ".$data[$id][2]."</td><tr/>";
		// echo "<tr><td>Description : ".$data[$id][3]."</td><tr/>";
		echo "<tr><td>Poids : ".$data[$id][4]."</td><tr/>";
		echo "<tr><td>Prix : ".$data[$id][5]."</td><tr/>";
		echo "<tr><td><a class='voir_articles' href='add_panier.php?produit=".$data[$id][0]."'>Ajouter au panier</a></td><tr/>";
		echo "</table>";
		echo "</div>";
		echo "</div>";
    }
    ?>
</body>
<footer>
</footer>
</html>
