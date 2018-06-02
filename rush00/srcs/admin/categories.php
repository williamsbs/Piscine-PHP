<?php
session_start();
include ("header_admin.php");
$content = unserialize(file_get_contents("../../private/categorie"));
$cat1 = $content[cat1];
$cat2 = $content[cat2];
$cat3 = $content[cat3];
$cat4 = $content[cat4];
$cat5 = $content[cat5];
echo "<table class='products'>";
	 echo "<tr>
	 <th>Catégorie :</th>
	 </tr>";
	 foreach ($cat1 as $cat1_elem)
	 {
	   echo "<tr>
	   <td>".$cat1_elem."</td></tr>";
	 }
	 foreach ($cat2 as $cat2_elem)
	 {
	   echo "<td>".$cat2_elem."</td></tr>";
	 }
	 foreach ($cat3 as $cat3_elem)
	 {
	   echo "<td>".$cat3_elem."</td></tr>";
	 }
	 foreach ($cat4 as $cat4_elem)
	 {
	   echo "<td>".$cat4_elem."</td></tr>";
	 }
	 if ($cat5 != "")
	 {
	 	foreach ($cat5 as $cat5_elem)
	 	{
	   		echo "<td>".$cat5_elem."</td></tr>";
	 	}
	}
	echo "</table>";
	 ?>
	 <h1>Ajouter une categorie</h1>
 	<div class='connection'>
 		<form method="POST" action="add_categorie.php">
 			Catégorie 1:<input type="text" name='categorie'></br>
 			<input type="submit" name="submit" value="valider">
 		</form>
 	</div>
	<h1>Modifier une catégorie</h1>
	<div class='connection'>
		<form method="POST" action="modif_categorie.php">
			Catégorie a modifier:<input type="text" name='ancienne'></br>
			Nouvelle catégorie :<input type="text" name='nouvelle'></br>
			<input type="submit" name="submit" value="valider">
		</form>
	</div>
	<h1>supprimer une catégorie</h1>
	<div class='connection'>
		<form method="POST" action="supp_categorie.php">
			Catégorie :<input type="text" name='categorie'></br>
			<input type="submit" name="submit" value="valider">
		</form>
	</div>
