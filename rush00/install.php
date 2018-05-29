<?php
session_start();
$_SESSION['acheter'] = "";
if(!file_exists("../private/passwd"))
{
	mkdir("../private", 0777, TRUE);
	$tab_count = array(array("login" => "admin", "passwd" => hash(sha512, "admin")));
	$serialised_count = serialize($tab_count);
	file_put_contents("../private/passwd", $serialised_count);
}
if(!file_exists("../private/categorie"))
{
	$tab_cat[0][legume] = "courgette";
	$tab_cat[1][legume] = "salade";
	$tab_cat[2][legume] = "pomme de terre";
	$tab_cat[3][legume] = "mais";
	$tab_cat[1][fruit] = "banane";
	$tab_cat[2][fruit] = "fraise";
	$tab_cat[3][fruit] = "pomme";
	$tab_cat[4][fruit] = "orange";
	$tab_cat[viande][0] = "boeuf";
	$tab_cat[viande][1] = "poulet";
	$tab_cat[viande][2] = "poisson";
	$tab_cat[produit_laitier][0] = "lait";
	$tab_cat[produit_laitier][1] = "fromage";
	$tab_cat[produit_laitier][2] = "Yaourt";
	$serialised_cat = serialize($tab_cat);
	file_put_contents("../private/categorie", $serialised_cat);
	$unserialised = unserialize(file_get_contents("../private/categorie"));
}
include ('get_data.php');
?>
