<?php
session_start();
$_SESSION['nb_articles']++;
$_SESSION['panier'][] = $_GET['produit'];
echo "<meta http-equiv='refresh' content='0,url=panier.php'>";
?>
