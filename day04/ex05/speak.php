<?php
session_start();

if ($_SESSION["loggued_on_user"] != "")
{
	if ($_POST["submit"] == "send")
	{
	if(file_exists("../private") == FALSE)
	{
		mkdir("../private", 0777, TRUE);
	}
	if(file_exists("../private/chat") == FALSE)
	{
		$tab = array(array("time" => time(),"login" => $_SESSION["loggued_on_user"], "msg" => $_POST["msg"]));
		$serialised = serialize($tab);
		file_put_contents("../private/chat", $serialised);
	}
	else
	{
		$file = fopen("../private/chat", "c+");
		flock($file, LOCK_EX);
		$content = unserialize(file_get_contents("../private/chat"));
		$content[] = array("time" => time(),"login" => $_SESSION["loggued_on_user"], "msg" => $_POST["msg"]);
		$serialised = serialize($content);
		file_put_contents("../private/chat", $serialised);
		fclose($file);
	}
}
?>
<html>
	<head>
		<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
	</head>
	<body>
		<form action="speak.php" method="POST">
			<input type="text" name="msg" value="" />
			<input type="submit" name="submit" value="send"/>
		</form>
	</body>
</html>
<?php
}
else
{
	echo "ERROR\n";
}
?>
