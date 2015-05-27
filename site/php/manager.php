<?php
	
	function addCoin($value)
	{
		global $mysql;
		
		$newCoin = (int)COIN + $value;
		$id = $_SESSION['userID'];
		
		$query = "UPDATE users SET coin='$newCoin' WHERE id='$id'";
		$result = mysqli_query($mysql, $query);
	}
?>