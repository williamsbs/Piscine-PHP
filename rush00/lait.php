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
         <img class="Lait" title="Lait" src="https://www.acupuncture-paysbasque.com/uploads/6/9/9/1/69918189/2213327-inline_orig.jpg" alt="image Lait" >
         <div class="desc">Le lait est un liquide biologique comestible généralement de couleur blanchâtre produit par les glandes mammaires des mammifères femelles.
           <form method="POST" action="panier.php">
             <input type="submit" name="add" value="Ajouter au Panier">
           </form>
         </div>
       </div>
     </div>
     <div class="responsive">
       <div class="gallery">
         <img class="fromage" title="fromage" src="http://resize3-doctissimo.ladmedia.fr/r/1010,,forcex/img/var/doctissimo/storage/images/fr/www/nutrition/diaporamas/fromages-moins-caloriques/3227540-1-fre-FR/Les-10-fromages-les-moins-caloriques.jpg" alt="image de fromage" >
         <div class="desc">Le fromage est un aliment obtenu à partir de lait coagulé ou de produits laitiers, comme la crème, puis d'un égouttage suivi ou non de fermentation et éventuellement d'affinage.
           <form method="POST" action="panier.php">
             <input type="submit" name="add" value="Ajouter au Panier">
           </form>
         </div>
       </div>
     </div>
     <div class="responsive">
       <div class="gallery">
         <img class="Yaourt" title="Yaourt" src="https://image.afcdn.com/recipe/20160628/44392_w420h344c1cx1424cy2144.jpg" alt="image de Yaourt" >
         <div class="desc">Le yaourt, yahourt, yogourt ou yoghourt, est un lait fermenté par le développement des seules bactéries lactiques thermophiles Lactobacillus delbrueckii subsp.
           <form method="POST" action="panier.php">
             <input type="submit" name="add" value="Ajouter au Panier">
           </form>
         </div>
       </div>
     </div>
     <div class="clearfix"></div>
   </body>
</html>
