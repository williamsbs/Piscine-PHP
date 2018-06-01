<?php
session_start();
$content = unserialize(file_get_contents("../../private/data"));
	if (count($content) > 0)
	{
		foreach ($content as $elem=>$value)
		{
			if ($value[0] == $_POST['id'])
			{
				unset($content[$elem]);
				$flag = 1;
			}
		}
	}
	else {
		$_SESSION['supp'] = 0;
		header('Location: products.php');
		exit();
	}
if ($flag == 1)
{
	$i = 0;
	$content = array_values($content);
	foreach ($content as $product=>$value)
	{
		$content[$product][0] = ($i + 1);
		$i++;
	}
	$serialized = serialize($content);
	file_put_contents("../../private/data", $serialized);
	$_SESSION['supp'] = "1";
	echo "<meta http-equiv='refresh' content='0,url=products.php'>";
	exit();
}
else {
	$_SESSION['supp'] = "0";
	echo "<meta http-equiv='refresh' content='0,url=products.php'>";
	exit();
}
?>
