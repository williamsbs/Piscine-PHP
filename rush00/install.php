<?php
session_start();
$_SESSION['acheter'] = "";
if(!file_exists("private/passwd"))
{
	mkdir("private", 0777, TRUE);
	$tab_count = array(array("login" => "admin", "passwd" => hash(sha512, "admin")));
	$serialised_count = serialize($tab_count);
	file_put_contents("private/passwd", $serialised_count);
}
if(!file_exists("private/categorie"))
{
	$tab_cat[cat1]["Legume"] = "Legume";
	$tab_cat[cat2]["Fruit"] = "Fruit";
	$tab_cat[cat3]["Viande"] = "Viande";
	$tab_cat[cat4]["Produits laitier"] = "Produits laitier";
	$serialised_cat = serialize($tab_cat);
	file_put_contents("private/categorie", $serialised_cat);
	$unserialised = unserialize(file_get_contents("private/categorie"));
}
include ('srcs/get_data.php');
?>
