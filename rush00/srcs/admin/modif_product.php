<?php
session_start();
function get_data($content)
{
	$i=0;
	if((isset($_POST['id']) && $_POST['id'] != NULL) &&
	(isset($_POST['type']) && $_POST['type'] != NULL) &&
	(isset($_POST['categorie']) && $_POST['categorie'] != NULL) &&
	($_POST['categorie'] == "Fruit" || $_POST['categorie'] == "Legume" ||
	$_POST['categorie'] == 'Viande' || $_POST['categorie'] == "Produits laitier") &&
	(isset($_POST['quantite']) && $_POST['quantite'] != NULL) &&
	(isset($_POST['poids']) && $_POST['poids'] != NULL) &&
	(isset($_POST['prix']) && $_POST['prix'] != NULL) &&
	(isset($_POST['image']) && $_POST['image'] != NULL) &&
	(isset($_POST['submit']) && $_POST['submit'] == "valider"))
	{
		$tab[0] = $_POST['id'];
		$tab[1] = $_POST['type'];
		$tab[2] = $_POST['categorie'];
		$tab[3] = $_POST['quantite'];
		$tab[4] = $_POST['poids'];
		$tab[5] = $_POST['prix'];
		$tab[6] = $_POST['image'];
	}
	else
	{
		$_SESSION["modifier"] = 0;
		header('Location: products.php');
		exit();
	}
	return($tab);
}
$id = FAlSE;
$content = unserialize(file_get_contents("../../private/data"));
$data = get_data($content);
foreach($content as $key=>$elem)
{
	if($data[0] == $elem[0])
	{
		$id = TRUE;
		$content[$key][1] = $data[1];
		$content[$key][2] = $data[2];
		$content[$key][3] = $data[3];
		$content[$key][4] = $data[4];
		$content[$key][5] = $data[5];
		$content[$key][6] = $data[6];
	}
}
if ($id == FALSE)
{
  $_SESSION['modifier'] = 0;
  echo "<meta http-equiv='refresh' content='0,url=admin-products.php'>";
}
$serialized = serialize($content);
file_put_contents("../../private/data", $serialized);
$_SESSION["modifier"] = 1;
echo "<meta http-equiv='refresh' content='0,url=products.php'>";
exit();
?>
