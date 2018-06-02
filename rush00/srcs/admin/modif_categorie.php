<?PHP
session_start();
include ("header_admin.php");
if ((isset($_POST['ancienne']) && $_POST['ancienne'] != NULL)&&
(isset($_POST['nouvelle']) && $_POST['nouvelle'] != NULL)&&
(isset($_POST['submit']) && $_POST['submit'] === "valider"))
{
  $ok = 0;
  $content = unserialize(file_get_contents("../../private/categorie"));
  foreach ($content as $cat=>$value)
  {
    $i = 0;
    foreach($value as $elem)
    {
      if ($elem == $_POST['ancienne']){
        $content[$cat][$_POST['nouvelle']] = $_POST['nouvelle'];
		unset($content[$cat][$_POST['ancienne']]);
        $ok = 1;
      }
      $i++;
    }
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
  $_SESSION['modif_cat'] = 0;
  echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
  exit();
}
else if ($ok == 1)
{
  $serialized = serialize($content);
  file_put_contents("../../private/categorie", $serialized);
  $_SESSION['modif_cat'] = 1;
  echo "<meta http-equiv='refresh' content='0,url=categories.php'>";
  exit();
}
?>
