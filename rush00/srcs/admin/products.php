<?php
session_start();
include ("header_admin.php");
$content = unserialize(file_get_contents("../../private/data"));
echo "<table class='products'>";
	echo "<tr>
	<th>Id</th>
	<th>Type</th>
	<th>Catégorie</th>
	<th>Quantite</th>
	<th>Poids</th>
	<th>Prix</th>
	<th>Image</th>
	</tr>";
	foreach ($content as $elem)
	{
	  echo "<tr>
	  <td>".$elem[0]."</td>
	  <td>".$elem[1]."</td>
	  <td>".$elem[2]."</td>
	  <td>".$elem[3]."</td>
	  <td>".$elem[4]."</td>
	  <td>".$elem[5]."</td>
	  <td>".$elem[6]."</td>
	  </tr>";
	}
	echo "</table>";
	?>
	<?php
	if(	$_SESSION["ajouter"] == 1)
	{
		echo "<h1>Il faut remplire tous les champs</h1>";
	}
	?>
	<h1>Ajouter un produit</h1>
	<div class='connection'>
		<form method="POST" action="add_product.php">
			Type :<input type="text" name='type'></br>
			Categorie :<input type="text" name='categorie'></br>
			Quantite :<input type="text" name='quantite'></br>
			Poids :<input type="text" name='poids'></br>
			Prix :<input type="text" name='prix'></br>
			Image :<input type="file" name='image'></br></br>
			<input type="submit" name="submit" value="valider">
		</form>
	</div>
	<h1>Modifier un produit</h1>
	<div class='connection'>
		<form method="POST" action="modif_product.php">
			Id :<input type="text" name='id'></br>
			Type :<input type="text" name='type'></br>
			Categorie :<input type="text" name='categorie'></br>
			Quantite :<input type="text" name='quantite'></br>
			Poids :<input type="text" name='poids'></br>
			Prix :<input type="text" name='prix'></br>
			Image :<input type="file" name='image'></br></br>
			<input type="submit" name="submit" value="valider">
		</form>
	</div>
	<h1>supprimer un produit</h1>
	<div class='connection'>
		<form method="POST" action="sup_product.php">
			Id :<input type="text" name='id'></br>
			<input type="submit" name="submit" value="valider">
		</form>
	</div>
