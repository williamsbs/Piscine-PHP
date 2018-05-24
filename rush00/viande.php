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
         <img class="Boeuf" title="Boeuf" src="https://docteurbonnebouffe.com/wp-content/uploads/2014/06/viande-rouge-bienfaits-et-risques-pour-la-sant%C3%A9-660x400.jpg" alt="image_viande de boeuf" >
         <div class="desc">La viande bovine est la viande issue des animaux de l'espèce Bos taurus, qu'il s'agisse de vache, taureau, veau, broutard, taurillon, génisse ou bœuf.
           <form method="POST" action="panier.php">
             <input type="submit" name="add" value="Ajouter au Panier">
           </form>
         </div>
       </div>
     </div>
     <div class="responsive">
       <div class="gallery">
         <img class="poulet" title="poulet" src="http://www.canalvie.com/polopoly_fs/1.780710.1344275961!/image/1947_le_poulet_viande_blanche_ou_viande_brune_670.jpg_gen/derivatives/cvlandscape_670_377/1947_le_poulet_viande_blanche_ou_viande_brune_670.jpg" alt="image de viande poulet" >
         <div class="desc">Un poulet est une jeune volaille, mâle ou femelle, de la sous-espèce Gallus gallus domesticus, élevée pour sa chair. Un petit poulet mâle est un coquelet, un poulet femelle est une poulette.
           <form method="POST" action="panier.php">
             <input type="submit" name="add" value="Ajouter au Panier">
           </form>
         </div>
       </div>
     </div>
     <div class="responsive">
       <div class="gallery">
         <img class="poisson" title="poisson" src="https://t2.uc.ltmcdn.com/fr/images/8/8/9/img_comment_cuire_du_poisson_a_la_vapeur_11988_600.jpg" alt="image de viande de poisson" >
         <div class="desc">Les poissons sont des animaux vertébrés aquatiques à branchies, pourvus de nageoires et dont le corps est le plus souvent couvert d'écailles.
           <form method="POST" action="panier.php">
             <input type="submit" name="add" value="Ajouter au Panier">
           </form>
         </div>
       </div>
     </div>
     <div class="clearfix"></div>
   </body>
</html>
