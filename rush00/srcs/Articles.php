<?php
include ("header.php"); ?>
<!DOCTYPE html>
<html>
<body>
  <?php
 $data = unserialize(file_get_contents("../private/data"));
 $j=0;
 foreach ($data as $elem)
 {
	 while($data[$j++][2] == $_GET[categorie])
	 {
		echo "<div class='responsive'>";
		echo "<div class='aff_prod'>";
   		echo "<tr><td>".$data[$_GET[id]][1]."</td></tr>";
   		echo "<tr><td><img src='".$data[$_GET[id]][6]."'></td><tr/>";
   		echo "<tr><td ><a class='voir_articles' href='detail.php?produit=".$data[$_GET[id]][0]."'>Voir les ".$data[$_GET[id]][1]."s !</a></td></tr>";
		echo "</div>";
		echo "</div>";
		$_GET[id]++;
 	}
}
?>
</body>
</html>
