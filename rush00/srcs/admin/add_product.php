<?php
session_start();
function get_data($content)
{
	$i=0;
	if((isset($_POST['type']) && $_POST['type'] != NULL) &&
	(isset($_POST['categorie']) && $_POST['categorie'] != NULL) &&
	($_POST['categorie'] == "Fruit" || $_POST['categorie'] == "Legume" ||
	$_POST['categorie'] == 'Viande' || $_POST['categorie'] == "Produits laitier") &&
	(isset($_POST['quantite']) && $_POST['quantite'] != NULL) &&
	(isset($_POST['poids']) && $_POST['poids'] != NULL) &&
	(isset($_POST['prix']) && $_POST['prix'] != NULL) &&
	(isset($_POST['image']) && $_POST['image'] != NULL) &&
	(isset($_POST['submit']) && $_POST['submit'] == "valider"))
	{
		// if ($content[$i][2] == $_POST['categorie'])
		// {
		// 	while ($content[$i++][2] == $_POST['categorie'])
		// 	{
		// 		$id++;
		// 	}
		// }
		$tab[0] = $id+1;
		$tab[1] = $_POST['type'];
		$tab[2] = $_POST['categorie'];
		$tab[3] = $_POST['quantite'];
		$tab[4] = $_POST['poids'];
		$tab[5] = $_POST['prix'];
		$tab[6] = $_POST['image'];
	}
	else
	{
		$_SESSION["ajouter"] = 0;
		header('Location: products.php');
		exit();
	}
	return($tab);
}
// $k = 0;
// $l = 5;
// $m = 1;
$content = unserialize(file_get_contents("../../private/data"));
$data = get_data($content);
$data[0] = count($content) + 1;

$content[] = $data;
// while ($k++ < count($content))
// {
// 	if ($k < count($content))
// 	{
// 		$content[$l][1] = $k;
//
// 	}
	// $l++;
	// $content[$l][0] = $k;
	// $content[$m++][0] = $content[$l][0];
// 	print_r($content[$k][0]);
// }
// print_r($content);

$serialized = serialize($content);
file_put_contents("../../private/data", $serialized);
$_SESSION["ajouter"] = 1;
echo "<meta http-equiv='refresh' content='0,url=products.php'>";
exit();
?>
