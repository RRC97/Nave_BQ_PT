<html>
	<?php
		include("php/connect.php");
	?>
	
	<head>
		<meta charset="UTF-8" /> 
        <link type="text/css" rel="stylesheet" href="res/style.css" />
    </head>
	<body>
		<?php
			include("src/bar.php");
		?>
		<center>
		<div id="context">
			<p>Comando: <input id="command" type="text" class="edit" hint="Commando"></input></p><p>
			<p>Resposta A: <input id="command" type="text" class="edit" hint="Commando"></input></p><p>
			<p>Resposta B: <input id="command" type="text" class="edit" hint="Commando"></input></p><p>
			<p>Resposta C: <input id="command" type="text" class="edit" hint="Commando"></input></p><p>
			<p>Resposta D: <input id="command" type="text" class="edit" hint="Commando"></input></p><p>
			<p>Resposta E: <input id="command" type="text" class="edit" hint="Commando"></input></p><p>
			<p>Gabarito: <input id="command" type="text" class="edit" hint="Commando"></input></p><p>
			<div class="button" style="width: 180px; height: 40px;"><a href="#" onclick="addQuest()">Adicionar questão</a></div></p>
		</div>
		</center>
		
		<script type="text/javascript">
			function addQuest()
			{
				var command = document.getElementById("command");
				var message = "Comando";
				alert(message + ": " + command.value);
			}
		</script>
	</body>
<html>