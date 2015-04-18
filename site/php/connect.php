<?php 
		error_reporting(0);
		$logged = false;
		$mysql = mysqli_connect("127.0.0.1", "root", "", "navequest");
		$query = "SELECT * FROM users WHERE email='matheuspereira.nave@gmail.com'";
		$result = mysqli_query($mysql, $query);
		$information = mysqli_fetch_row($result);
		
		if($information)$logged = true;
		define("USER", $information[1]);
		define("EMAIL", $information[3]);
		define("COIN", $information[5]);
		define("MONEY", $information[6]);
?>