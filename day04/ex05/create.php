<?php
if ($_POST["login"] != "" && $_POST["passwd"] != "" && $_POST["submit"] == "OK")
{
	$passwd = hash(sha512,$_POST["passwd"]);
	if (file_exists("../private") == FALSE)
	{
		mkdir ("../private", 0777, TRUE);
	}
	if (file_exists("../private/passwd") == FALSE)
	{
		$tab = array(array("login" => $_POST["login"], "passwd" => $passwd));
		$serialised = serialize($tab);
		file_put_contents("../private/passwd", $serialised);
		header("Location: index.html");
		// echo "OK";
	}
	else
	{
		$content = FALSE;
		$unserialised = unserialize(file_get_contents("../private/passwd"));
		foreach($unserialised as $elem)
		{
			if($elem["login"] == $_POST["login"])
			{
				$content = TRUE;
			}
		}
		if ($content == FALSE)
		{
			$unserialised[] = array("login" => $_POST["login"], "passwd" => $passwd);
			$new_serialized = serialize($unserialised);
			file_put_contents("../private/passwd", $new_serialized);
			header("Location: index.html");
			// echo "OK";
		}
		else
		{
			echo "ERROR\n";
		}
	}
}
else
{
	echo "ERROR\n";
}
?>
