<?php
	include("connect.php");
	include("manager.php");
	
	if(isset($_POST["command"]) && isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]) && isset($_POST["d"]) && isset($_POST["e"])
	&& isset($_POST["expA"]) && isset($_POST["expB"]) && isset($_POST["expC"]) && isset($_POST["expD"]) && isset($_POST["expE"])
	&& isset($_POST["template"]) && isset($_POST["subject"]))
	{
		$command = $_POST["command"];
		$template = $_POST["template"];
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];
		$d = $_POST["d"];
		$e = $_POST["e"];
		$expA = $_POST["expA"];
		$expB = $_POST["expB"];
		$expC = $_POST["expC"];
		$expD = $_POST["expD"];
		$expE = $_POST["expE"];
		$subject = $_POST["subject"];
		$query = "INSERT INTO quests (command, a, b, c, d, e, expA, expB, expC, expD, expE, subject, template)" . 
		" VALUES ('$command', '$a', '$b', '$c', '$d', '$e', '$expA', '$expB', '$expC', '$expD', '$expE', '$subject', '$template')";
		$result = mysqli_query($mysql, $query);
		if($result)
		{
			echo "true";
			addCoin(20);
		}
		else
		{
			echo "false";
		}
	}
?>