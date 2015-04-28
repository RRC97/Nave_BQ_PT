<html>
	<head>
		<meta charset="UTF-8" /> 
        <link type="text/css" rel="stylesheet" href="res/style.css" />
		<script type="text/javascript" src="js/login.js"></script>
    </head>
    <body>
		<?php
			include("src/bar.php");
		?>
		<center>
		<div id="context">
			<div id="header">
				<img src="res/logo.png" height="150px"></img>
			</div>
			<div id="content">
				<center>
				<p>E-mail <br><input id="email" type="text" class="edit"></input><br>
				Senha <br><input id="pass" type="password" class="edit"></input></p>
				<p><div class="button" style="width: 120px; height: 40px">
					<a id="login" href="#" onclick="login();">Entrar</a></div></p>
				<center/>
			</div>
		</div>
		</center>
		
		<script>
			var editEmail = document.getElementById("email");
			var editPass = document.getElementById("pass");
			
			function login()
			{
				log(editEmail.value, editPass.value);
			}
		</script>
    </body>
</html>