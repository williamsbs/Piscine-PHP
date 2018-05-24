<?php
include ('index.php');
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
    <div class="responsive">
  <div class="gallery">
      <img title="Babane" src="https://www.ok-salute.it/wp-content/uploads/2017/05/banane-696x392.jpg" alt="Image Banane">
    <div class="desc">La banane est le fruit ou la baie dérivant de l’inflorescence du bananier. Les bananes sont des fruits très généralement stériles issus de variétés domestiquées.
      <form method="POST" action="panier.php">
        <input type="submit" name="add" value="Ajouter au Panier">
      </form>
    </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
      <img title="Fraise" src="https://www.lanutrition.fr/sites/default/files/styles/article_large/public/ressources/fraises_3.jpg?itok=xKYGdJIk" alt="Image Fraise">
    <div class="desc">La fraise est le fruit des fraisiers, espèces de plantes herbacées appartenant au genre Fragaria, dont plusieurs sont cultivées.
      <form method="POST" action="panier.php">
        <input type="submit" name="add" value="Ajouter au Panier">
      </form>
    </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
      <img title="Pomme" src="https://www.lejournaldejoliette.ca/upload/11/evenements/2015/1/207453/rappel-de-pommes-620x348.jpg" alt="Image Pomme">
    <div class="desc">La pomme est un fruit comestible à pépins d'un goût sucré et acidulé et à la propriété plus ou moins astringente selon les variétés.
      <form method="POST" action="panier.php">
        <input type="submit" name="add" value="Ajouter au Panier">
      </form>
    </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
      <img title="Orange" src="https://www.rd.com/wp-content/uploads/2017/12/01_oranges_Finally%E2%80%94Here%E2%80%99s-Which-%E2%80%9COrange%E2%80%9D-Came-First-the-Color-or-the-Fruit_691064353_Lucky-Business-1024x683.jpg" alt="Image Orange">
    <div class="desc">L’orange est un agrume, fruit des orangers, des arbres de différentes espèces de la famille des Rutacées ou d'hybrides de ceux-ci.
      <form method="POST" action="panier.php">
        <input type="submit" name="add" value="Ajouter au Panier">
      </form>
    </div>
  </div>
</div>
<div class="clearfix"></div>
  </body>
</html>
