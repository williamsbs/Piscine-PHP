<?php
include ("index.php"); ?>
<!DOCTYPE html>
<html>
<body>
<?php
 $data = unserialize(file_get_contents("../private/data"));
 foreach ($data as $elem)
 {
	 echo "<div class='responsive'>";
	 echo "<div class='aff_prod'>";
	 echo "<tr><td>".$elem[1]."</td></tr>";
	 echo "<tr><td><img src='".$elem[6]."'></td><tr/>";
	 echo "<tr><td><a class='voir_articles' href='detail.php?produit=".$elem[0]."'>Voir les ".$elem[1]."s !</a></td></tr>";
	 echo "</div>";
	 echo "</div>";
 }
 ?>
</body>
</html>
