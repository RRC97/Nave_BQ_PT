<?php 
		error_reporting(0);
		session_start();
		$mysql_host = "127.0.0.1";
		$mysql_database = "navequest";
		$mysql_user = "root";
		$mysql_password = "";
		$mysql = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
		$logged = false;
		
		function login($e, $p)
		{
			global $mysql, $logged;
			$email = $e;
			$salt = md5("6keu2yd5i2kun33uu7va9qa4uy2na8d8");
			$cod = crypt($p, $salt);
			$password = hash("sha512", $cod);
			$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$result = mysqli_query($mysql, $query);
			$information = mysqli_fetch_row($result);
			if($information)
			{
				$logged = true;
				$_SESSION["userID"] = $information[0];
			}
		}
		
		function getInfo($query)
		{
			global $mysql, $logged;
			$result = mysqli_query($mysql, $query);
			$information = mysqli_fetch_row($result);
			if($information)
			{
				$logged = true;
				define("USER", $information[1]);
				define("EMAIL", $information[3]);
				define("ISTEACHER", $information[4]);
				define("COIN", $information[5]);
				define("MONEY", $information[6]);
			}
		}
		
		function verify()
		{
			global $logged;
			if(isset($_SESSION["userID"]))
			{
				$id = $_SESSION["userID"];
				$query = "SELECT * FROM users WHERE id='$id'";
				getInfo($query);
				
				if(!$logged)
					destroy();
			}
			else if(isset($_POST["email"]) && isset($_POST["password"]))
			{
				login($_POST["email"], $_POST["password"]);
				if($logged)
					echo "true";
			}
			else
			{
				destroy();
			}
		}
		
		function destroy()
		{
			session_destroy();
		}
		
		verify();
		
		if(isset($_GET["off"]))
		{
			destroy();
			echo '<script>location.href = "index.php";</script>';
		}
?>