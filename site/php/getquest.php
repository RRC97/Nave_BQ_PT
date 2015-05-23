<?php
	
	function getQuest()
	{
		global $mysql;
		
		$query = "SELECT * FROM quests";
		$result = mysqli_query($mysql, $query);
		$length = mysqli_num_rows($result);
		$selected = rand(0, $length - 1);
		for($i = 0; $i < $selected; $i++)
			$row = mysqli_fetch_row($result);
			
		$quest = mysqli_fetch_row($result);
		$stringArray = "[";
		
		for($i = 0; $i < count($quest) - 1; $i++)
			$stringArray = $stringArray . "'$quest[$i]',";
		
		$stringArray = $stringArray . "]";
			
		echo($stringArray);
	}
?>