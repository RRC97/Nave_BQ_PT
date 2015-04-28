<?php
	include("connect.php");
	
	if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["name"]))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$salt = md5("6keu2yd5i2kun33uu7va9qa4uy2na8d8");
		$cod = crypt($_POST["password"], $salt);
		$password = hash("sha512", $cod);
		$query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
		$result = mysqli_query($mysql, $query);
		if($result)
		{
			verify();
		}
	}
?>