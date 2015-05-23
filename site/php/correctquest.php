<?php
	include("connect.php");
	
	if(isset($_POST["idQuest"]))
	{
		$id = $_POST["idQuest"];
		$query = "SELECT * FROM quests WHERE id='$id'";
		$result = mysqli_query($mysql, $query);
		$quest = mysqli_fetch_row($result);
		$indexTemplate = count($quest) - 1;
		$template = "$quest[$indexTemplate]";
		echo $template;
	}
?>