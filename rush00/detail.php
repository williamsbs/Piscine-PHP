<?php
session_start();
include ("index.php"); ?>
<!DOCTYPE html>
<html>
<body>
  <div id="content">
    <br/>
    <h2>Choix disponibles: </h2>

    <?PHP
    $data = unserialize(file_get_contents("../private/data"));
    $flag = 0;
    $id = $_GET[produit] - 1;
    foreach ($data as $elem)
    {
        if ($elem[0] == $_GET[produit])
          $flag = 1;
    }
    if (isset($_GET[produit]) && $_GET[produit] != NULL &&
    $_GET[produit] >= 0 && is_numeric($_GET[produit]) && $flag == 1)
    {
      echo "<a href='selection.php' class='admin-users'>Revenir à la liste</a><br/><br/>";
      echo "<table id='page-produit'>";
      echo "<tr><td class='produit'>".$data[$id][1]."</td><tr/>";
      echo "<tr><td><img src='".$data[$id][6]."'/ style='width:100%;'></td><tr/>";
      echo "<tr><td>Categorie : ".$data[$id][2]."</td><tr/>";
	  // echo "<tr><td>Description : ".$data[$id][3]."</td><tr/>";
      echo "<tr><td>Poids : ".$data[$id][4]."</td><tr/>";
      echo "<tr><td>Prix : ".$data[$id][5]."</td><tr/>";
	  echo "<tr><td><a href='add_panier.php?produit=".$data[$id][0]."'>Ajouter au panier</a></td><tr/>";
      echo "</table>";
    }
    ?>
  </div>
</body>
<footer>
</footer>
</html>
