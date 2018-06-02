<?php
session_start();
include ("header.php"); ?>
<!DOCTYPE html>
<html>
<body>

    <?php
    $data = unserialize(file_get_contents("../private/data"));
    $flag = 0;
	$content = unserialize(file_get_contents("../private/categorie"));
	$cat1 = $content[cat1];
	$cat2 = $content[cat2];
	$cat3 = $content[cat3];
	$cat4 = $content[cat4];
	foreach($cat1 as $elem1){}
	foreach($cat2 as $elem2){}
	foreach($cat3 as $elem3){}
	foreach($cat4 as $elem4){}
	$tab[0] = $elem1;
	$tab[1] = $elem2;
	$tab[2] = $elem3;
	$tab[3] = $elem4;
    $id = $_GET[produit] - 1;
    foreach ($data as $elem)
    {
        if ($elem[0] == $_GET[produit])
          $flag = 1;
    }
	?>
	<h1><?php echo $data[$id][1];?>:</h1>
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
		if ($data[$id][2] == "Legume")
			echo "<tr><td>Categorie : ".$tab[0]."</td><tr/>";
		if ($data[$id][2] == "Fruit")
			echo "<tr><td>Categorie : ".$tab[1]."</td><tr/>";
		if ($data[$id][2] == "Viande")
			echo "<tr><td>Categorie : ".$tab[2]."</td><tr/>";
		if ($data[$id][2] == "Produits laitier")
			echo "<tr><td>Categorie : ".$tab[3]."</td><tr/>";
		echo "<tr><td>Poids : ".$data[$id][4]."</td><tr/>";
		echo "<tr><td>Prix : ".$data[$id][5]."</td><tr/>";
		echo "<tr><td>Quantité : ".$data[$id][3]."</td><tr/>";
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
