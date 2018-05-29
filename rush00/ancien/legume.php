<?php
include ("index.php"); ?>
<!DOCTYPE html>
<html>
<body>
  <?php
 $data = unserialize(file_get_contents("../private/data"));
 $i=0;
 $j=0;
 echo "<table id='boutique'>";
 foreach ($data as $elem)
 {
	 while($data[$j++][2] == "Legume")
	 {
   		echo "<tr><td class='type'>".$data[$i][1]."</td></tr>";
   		echo "<tr><td><img src='".$data[$i][6]."'/ style='width:20%;'></td><tr/>";
   		echo "<tr><td class='acheter_articles'><a href='detail.php?produit=".$data[$i][0]."'>Voir les produits !</a></td></tr>";
		$i++;
 	}
}
 echo "</table>";
 ?>
</body>
</html>
