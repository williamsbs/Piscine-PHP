<?php
include ("index.php"); ?>
<!DOCTYPE html>
<html>
<body>
  <?php
 $data = unserialize(file_get_contents("../private/data"));
 $j=0;
 echo "< class='boutique'>";
 foreach ($data as $elem)
 {
	 while($data[$j++][2] == $_GET[categorie])
	 {
   		echo "<tr><td class='id'>".$data[$_GET[id]][1]."</td></tr>";
   		echo "<tr><td><img src='".$data[$_GET[id]][6]."'/ style='width:20%;'></td><tr/>";
   		echo "<tr><td class='acheter_articles'><a href='detail.php?produit=".$data[$_GET[id]][0]."'>Voir les produits !</a></td></tr>";
		$_GET[id]++;
 	}
}
 echo "</>";
 ?>
</body>
</html>
