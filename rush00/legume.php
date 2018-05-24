<?php
include ('index.html');
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
        <img class="salade" title="salade" src="https://jardinage.lemonde.fr/images/dossiers/2017-07/batavia-153406.jpg" alt="image_salade" >
        <div class="desc">La laitue, laitue cultivée ou salade est une plante herbacée appartenant au genre Lactuca, de la famille des Astéracées, largement cultivée pour ses feuilles tendres consommées comme légume, généralement crues en salade.
          <form method="POST" action="panier.php">
            <input type="submit" name="add" value="Ajouter au Panier">
          </form>
        </div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <img class="courgette" title="courgette" src="https://www.marshalls-seeds.co.uk/images/products/product_2323_large.jpg" alt="image_courgette" >
        <div class="desc">La courgette est une plante herbacée de la famille des Cucurbitaceae, c'est aussi le fruit comestible de cette plante. La courgette est un légume courant en été, la fleur de courgette est aussi utilisée en cuisine.
          <form method="POST" action="panier.php">
            <input type="submit" name="add" value="Ajouter au Panier">
          </form>
        </div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <img class="patate" title="patate" src="http://lavieagricole.ca/media/image_article/patates.jpg" alt="image_patate" >
        <div class="desc">La pomme de terre, ou patate, est un tubercule comestible produit par l’espèce Solanum tuberosum, appartenant à la famille des solanacées.
          <form method="POST" action="panier.php">
            <input type="submit" name="add" value="Ajouter au Panier">
          </form>
        </div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
        <img class="mais" title="mais" src="https://fr.cdn.v5.futura-sciences.com/buildsv6/images/largeoriginal/2/c/e/2ce0f12e9f_91255_mais.jpg" alt="image_mais" >
        <div class="desc">Le maïs, appelé blé d’Inde au Canada, est une plante herbacée tropicale annuelle de la famille des Poacées, largement cultivée comme céréale pour ses grains riches en amidon, mais aussi comme plante fourragère.
          <form method="POST" action="panier.php">
            <input type="submit" name="add" value="Ajouter au Panier">
          </form>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </body>
</html>
