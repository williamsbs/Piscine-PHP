<?php
if ($_POST["submit"] == "OK" && $_POST["newpw"] != NULL && $_POST["login"] != NULL)
{
	$oldpw = hash(sha512, $_POST["oldpw"]);
	$newpw = hash(sha512, $_POST["newpw"]);
	$content = unserialize(file_get_contents("../private/passwd"));
	$i = 0;
	foreach($content as $elem)
	{
		if ($elem["login"] == $_POST["login"] && $elem["passwd"] == $oldpw)
		{
			$content[$i]["passwd"] = $newpw;
			$changed = 1;
		}
		if ($elem["passwd"] != $oldpw)
		{
			echo "ERROR\n";
		}
		$i++;
	}
	if ($changed == 1)
	{
		$serialised = serialize($content);
		file_put_contents("../private/passwd", $serialised);
		header("Location: index.html");
	}
}
else
{
	echo "ERROR\n";
}
?>
