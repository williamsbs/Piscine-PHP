<?PHP
session_start();
if ((isset($_POST['categorie']) && $_POST['categorie'] != NULL)&&
(isset($_POST['submit']) && $_POST['submit'] === "valider"))
{
  $ok = 0;
  $content = unserialize(file_get_contents("../../private/categorie"));
  print_r($content[cat1]);
  print_r ($_POST['categorie']);
  if (array_search($_POST['categorie'], $content[cat1]))
  {
    $return = array_search($_POST['categorie'], $content[cat1]);
    unset($content[cat1][$return]);
    $content[cat1] = array_values($content[cat1]);
    $ok = 1;
  }
  elseif (array_search($_POST['categorie'], $content[cat2]))
  {
	$return = array_search($_POST['categorie'], $content[cat2]);
	unset($content[cat2][$return]);
	$content[cat2] = array_values($content[cat2]);
	$ok = 1;
  }
  elseif (array_search($_POST['categorie'], $content[cat3]))
  {
  $return = array_search($_POST['categorie'], $content[cat3]);
  unset($content[cat3][$return]);
  $content[cat3] = array_values($content[cat3]);
  $ok = 1;
  }
  elseif (array_search($_POST['categorie'], $content[cat4]))
  {
  $return = array_search($_POST['categorie'], $content[cat4]);
  unset($content[cat4][$return]);
  $content[cat4] = array_values($content[cat4]);
  $ok = 1;
  }
}
else
{
  echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
  exit();
}
echo $ok;
if ($ok == 0)
{
  $_SESSION['supp_cat'] = "ko";
  echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
  exit();
}
else if ($ok == 1)
{
  $serialized = serialize($content);
  file_put_contents("../../private/categorie", $serialized);
  $_SESSION['supp_cat'] = "ok";
  echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
  exit();
}
?>
