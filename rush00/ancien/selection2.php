<?php  include ("index.php"); ?>
<!DOCTYPE html>
<html>
<body>
  <?PHP
 $data = unserialize(file_get_contents("../private/categorie"));
 echo "<table id='boutique'>";
 foreach ($data as $elem)
 {
   echo "<tr><td class='type'>".$elem[legume]."</td></tr>";
   // print_r ($elem);
   echo "<tr><td><img src='".$elem[7]."'/ style='width:20%;'></td><tr/>";
   echo "<tr><td class='acheter_articles'><a href='detail.php?produit=".$elem[legume]."'>Voir les produits !</a></td></tr>";
 }
 echo "</table>";
 ?>
</body>
<footer>
</footer>
</html>
