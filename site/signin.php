<html>
	<head>
		<meta charset="UTF-8" /> 
        <link type="text/css" rel="stylesheet" href="res/style.css" />
		<script type="text/javascript" src="js/signin.js"></script>
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
			<div class="focused">
				<center>
				<p>Digite seu nome <br><input id="name" type="text" class="edit"></input><br>
				Digite seu sobrenome <br><input id="lastname" type="text" class="edit"></input><br>
				Digite seu e-mail <br><input id="email" type="text" class="edit"></input><br>
				Digite uma senha <br><input id="pass" type="password" class="edit"></input><br>
				Repita a senha <br><input id="repass" type="password" class="edit"></input></p>
				<p><div class="button" style="width: 120px; height: 40px">
				<a id="login" href="#" onclick="signin();">Cadastrar</a></div></p>
				</center>
			</div>
		</div>
		</center>
		
		<script>
			var editEmail = document.getElementById("email");
			var editName = document.getElementById("name");
			var editLastname = document.getElementById("lastname");
			var editPass = document.getElementById("pass");
			var editRepass = document.getElementById("repass");
			
			function signin()
			{
				if(editName.value != "" && editPass.value != "" && editEmail.value != ""
				&& editRepass.value != "" && editLastname.value != "")
				{
					if(editPass.value == editRepass.value)
					{
						var name = editName.value + " " + editLastname.value;
						sign(name, editEmail.value, editPass.value);
					}
					else
					{
						alert("Senhas não estão em concordância");
					}
				}
				else
				{
					alert("Preencha todos os campos");
				}
			}
		</script>
    </body>
</html>