<html>	
	<head>
		<meta charset="UTF-8" /> 
        <link type="text/css" rel="stylesheet" href="res/style.css" />
    </head>
	<body>
		<?php
			include("src/bar.php");
		?>
		
		<script>
			var isTeacher = "<?php echo ISTEACHER; ?>";
			if(isTeacher != "1")
			{
				alert("Você não tem permissão para acessar essa página");
				location.href="index.php";
			}
		</script>
		
		<center>
		<div id="context">
			<div id="header">
				<img src="res/logo.png" height="150px"></img>
			</div>
			<div id = "content">
			
			<p>Comando: <br><input id="command" type="text" class="edit"></input><br>
			Resposta A: <br><input id="command" type="text" class="edit"></input><br>
			Resposta B:<br><input id="command" type="text" class="edit"></input><br>
			Resposta C:<br> <input id="command" type="text" class="edit"></input><br>
			Resposta D:<br> <input id="command" type="text" class="edit"></input><br>
			Resposta E: <br><input id="command" type="text" class="edit"></input><br>
			Gabarito: <br><select style="width: 173px; height: 20px">
							<option>Selecione um gabarito</option>
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
							<option>E</option>
							</select></p>
			<p><div class="button" style="width: 180px; height: 40px;">
				<a href="#" onclick="addQuest()">Adicionar questão</a></div></p>
			</div>
			<div id="footer"></div>
		</div>
		</center>
		
		<script type="text/javascript">
			function addQuest()
			{
				alert("Funcão inativa");
			}
		</script>
	</body>
<html>