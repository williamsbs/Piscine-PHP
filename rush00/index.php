<?php
include ("install.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boutique</title>
    <link rel="stylesheet" href="selection.css">
  </head>
  <body>
    <nav>
      <label for="menu-deroulant" class="menu-deroulant">Menu</label>
      <input type="checkbox" id="menu-deroulant" role="button">
      <ul>
        <li class="home"><a href="index.php">Boutique</a></li>
        <li class="menu-legume"><a href="legume.php">Legume</a>
          <ul class="sous-menu">
            <li><a href="legume.php">Courgette</a></li>
            <li><a href="legume.php">Salade</a></li>
            <li><a href="legume.php">Pomme de terre</a></li>
            <li><a href="legume.php">Maïs</a></li>
          </ul></li>
        <li class="menu-fruit"><a href="fruit.php">Fruit</a>
          <ul class="sous-menu">
            <li><a href="fruit.php">Banane</a></li>
            <li><a href="fruit.php">Fraise</a></li>
            <li><a href="fruit.php">Pomme</a></li>
            <li><a href="fruit.php">Orange</a></li>
          </ul></li>
        <li class="menu-viande"><a href="viande.php">Viande</a>
          <ul class="sous-menu">
            <li><a href="viande.php">Boeuf</a></li>\
            <li><a href="viande.php">Poulet</a></li>
            <li><a href="viande.php">Poisson</a></li>
          </ul></li>
        <li class="menu-lait"><a href="Lait.php">Produit laitier</a>
          <ul class="sous-menu">
            <li><a href="lait.php">Lait</a></li>
            <li><a href="lait.php">Fromage</a></li>
            <li><a href="lait.php">Yaourt</a></li>
          </ul></li>
        <li class="compte"><a href="#">Compte</a>
          <ul class="sous-menu">
            <li><a href="login.php">Se connecter</a></li>
            <li><a href="create.php">Cree un compte</a></li>
            <li><a href="modif.php">Modifier son compte</a></li>
			<li><a href="supprimer.php">Supprimer son compte</a></li>
            <li><a href="logout.php">Deconnection</a></li>
          </ul></li>
        <li class="panier"><a href="panier.html">Panier</a>
          <ul class="sous-menu">
            <li><a href="#">Visualiser le panier</a></li>
            <li><a href="#">passer la commande</a></li>
            <li><a href="#">supprimer le panier</a></li>
          </ul></li>
      </ul>
    </nav>
  </body>
</html>
