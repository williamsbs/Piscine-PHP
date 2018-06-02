<?php
include ('header_admin.php');
echo "<div>";
	echo "<ul>";
		echo "<li><a class='admin-users1' href='add_user.php'>Ajouter un utilisateur</a></li></br>";
		echo "<li><a class='admin-users1' href='modif_user.php'>Modifier un utilisateur</a></li></br>";
		echo "<li><a class='admin-users1' href='sup_user.php'>Supprimer un utilisateur</a></li></br>";
		echo "<li><a class='admin-users1' href='products.php'>Ajouter/Modifier/Supprimer un produit</a></li></br>";
		echo "<li><a class='admin-users1' href='categories.php'>Ajouter/Modifer/Supprimer une categorie</a></li></br>";
		echo "<li><a class='admin-users1' href='historique_commande.php'>Historique des commandes</a></li></br>";
	echo "</ul>";
echo "</div>";
?>
