<?php
include ("index.php"); ?>
<!DOCTYPE html>
<html>
<body>
  <?php
    // echo "<aside>";
 $data = unserialize(file_get_contents("../private/data"));
 echo "<table id='boutique'>";
 foreach ($data as $elem)
 {
   echo "<tr><td class='type'>".$elem[1]."</td></tr>";
   echo "<tr><td><img src='".$elem[6]."'/ style='width:20%;'></td><tr/>";
   echo "<tr><td class='acheter_articles'><a href='detail.php?produit=".$elem[0]."'>Voir les produits !</a></td></tr>";
 }
 echo "</table>";
 ?>
</body>
</html>
