<?php
 $data = unserialize(file_get_contents("../private/data"));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boutique</title>
    <link rel="stylesheet" href="css/selection.css">
  </head>
  <body>
    <nav>
      <label for="menu-deroulant" class="menu-deroulant">Menu</label>
      <input type="checkbox" id="menu-deroulant" role="button">
      <ul>
		  <li class='home'><a href='selection.php'>Boutique</a></li>
		  <?php
		  $i=0;
		  $j=0;
// ------------------------------------LEGUME-----------------------------------------------
        echo "<li class='menu-legume'><a href='Articles.php?id=".$i."&categorie=".$data[$j][2]."'>".$data[$j][2]."</a>";
         echo "<ul class='sous-menu'>";
		while($data[$j++][2] == "Legume")
		{
            echo"<li><a href='detail.php?produit=".($i+1)."'>".$data[$i++][1]."</a></li>";
		}
          echo "</ul></li>";
// ---------------------------------------FRUIT--------------------------------------------
    	echo "<li class='menu-fruit'><a href='Articles.php?id=".$i."&categorie=".$data[$j][2]."'>".$data[$j][2]."</a>";
          echo "<ul class='sous-menu'>";
		  $j--;
		  while($data[$j++][2] == "Fruit"){
            echo"<li><a href='detail.php?produit=".($i+1)."'>".$data[$i++][1]."</a></li>";}
          echo "</ul></li>";
// ---------------------------------------VIANDE--------------------------------------------
        echo "<li class='menu-viande'><a href='Articles.php?id=".$i."&categorie=".$data[$j][2]."'>".$data[$j][2]."</a>";
          echo "<ul class='sous-menu'>";
		  $j--;
		  while($data[$j++][2] == "Viande"){
            echo"<li><a href='detail.php?produit=".($i+1)."'>".$data[$i++][1]."</a></li>";}
          echo "</ul></li>";
// --------------------------------------LAIT---------------------------------------------
        echo "<li class='menu-lait'><a href='Articles.php?id=".$i."&categorie=".$data[$j][2]."'>".$data[$j][2]."</a>";
          echo "<ul class='sous-menu'>";
		  $j--;
		 while($data[$j++][2] == "Produits laitier"){
            echo"<li><a href='detail.php?produit=".($i+1)."'>".$data[$i++][1]."</a></li>";}
		echo "</ul></li>";
// -----------------------------------------------------------------------------------?>
        <li class="compte"><a href="#">Compte</a>
          <ul class="sous-menu">
			  <li><a href="connection/login.php">Se connecter</a></li>
              <li><a href="connection/create.php">Cree un compte</a></li>
              <li><a href="connection/modif.php">Modifier son compte</a></li>
			  <li><a href="connection/supprimer.php">Supprimer son compte</a></li>
              <li><a href="connection/logout.php">Deconnection</a></li>
          </ul></li>
        <li class="panier"><a href="panier.php">Panier</a>
          <ul class="sous-menu">
            <li><a href="panier.php">Visualiser le panier</a></li>
            <li><a href="vide_panier.php">supprimer le panier</a></li>
          </ul></li>
      </ul>
    </nav>
  </body>
</html>
<?php
if ($_SESSION["loggued_on_user"] == "admin")
{
	echo "<a href='admin/admin.php'>Admin</a></li>";
}
?>
