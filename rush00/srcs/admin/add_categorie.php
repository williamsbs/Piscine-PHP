<?php
session_start();
$ok = 1;
if ((isset($_POST['categorie']) && $_POST['categorie'] != NULL) &&
(isset($_POST['submit']) && $_POST['submit'] === "valider"))
{
	$content = unserialize(file_get_contents("../../private/categorie"));
	foreach($content as $product=>$value)
	{
		if($value[0] = $_POST["categorie"])
		{
			$_SESSION['add_categorie'] = 0;
			echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
		}
	}

}
else
{
	header("Location: categorie.php");
	exit();
}
if ($ok == 1)
{
if (!array_search("Legume", $content[cat1]) && $_POST['categorie'] == "Legume")
{
	$content[cat1][$_POST["categorie"]] = $_POST["categorie"];
	$serialized = serialize($content);
	file_put_contents("../../private/categorie", $serialized);
	$_SESSION['add_categorie'] = 1;
	echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
	exit();
}
if (!array_search("Fruit", $content[cat2]) && $_POST['categorie'] == "Fruit")
{
	$content[cat2][$_POST["categorie"]] = $_POST["categorie"];
	$serialized = serialize($content);
	file_put_contents("../../private/categorie", $serialized);
	$_SESSION['add_categorie'] = 1;
	echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
	exit();
}
if (!array_search("Viande", $content[cat3]) && $_POST['categorie'] == "Viande")
{
	$content[cat3][$_POST["categorie"]] = $_POST["categorie"];
	$serialized = serialize($content);
	file_put_contents("../../private/categorie", $serialized);
	$_SESSION['add_categorie'] = 1;
	echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
	exit();
}
if (!array_search("Produits laitier", $content[cat4]) && $_POST['categorie'] == "Produits laitier")
{
	$content[cat4][$_POST["categorie"]] = $_POST["categorie"];
	$serialized = serialize($content);
	file_put_contents("../../private/categorie", $serialized);
	$_SESSION['add_categorie'] = 1;
	echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
	exit();
}
else
{
	$content[cat5][$_POST["categorie"]]= $_POST["categorie"];
	$serialized = serialize($content);
	file_put_contents("../../private/categorie", $serialized);
	$_SESSION['add_categorie'] = 1;
	echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
	exit();
}
}
?>
