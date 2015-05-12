<?php
	include("connect.php");
	
	if(isset($_POST["command"]) && isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]) && isset($_POST["d"]) && isset($_POST["e"])
	&& isset($_POST["template"]))
	{
		$command = $_POST["command"];
		$template = $_POST["template"];
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];
		$d = $_POST["d"];
		$e = $_POST["e"];
		$query = "INSERT INTO quests (command, a, b, c, d, e, template) VALUES ('$command', '$a', '$b', '$c', '$d', '$e', '$template')";
		$result = mysqli_query($mysql, $query);
		if($result)
		{
			echo "true";
		}
		else
		{
			echo "false";
		}
	}
?>