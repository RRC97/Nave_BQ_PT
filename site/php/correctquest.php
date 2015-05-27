<?php
	include("connect.php");
	include("manager.php");
	
	if(isset($_POST["idQuest"]) && isset($_POST["response"]))
	{
		$id = $_POST["idQuest"];
		$response = $_POST["response"];
		$query = "SELECT * FROM quests WHERE id='$id'";
		$result = mysqli_query($mysql, $query);
		$quest = mysqli_fetch_row($result);
		$indexTemplate = count($quest) - 1;
		$template = $quest[$indexTemplate];
		if($template == $response)
		{
			echo "true";
			if(ISTEACHER != "1")
			{
				addCoin(10);
			}
		}
		else
		{
			$expResponse = $response + 5;
			echo "$quest[$expResponse]";
		}
	}
?>