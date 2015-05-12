<html>	
	<head>
		<meta charset="UTF-8" /> 
        <link type="text/css" rel="stylesheet" href="res/style.css" />
		<script src="js/addquest.js"> </script>
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
			Resposta A: <br><input id="a" type="text" class="edit"></input><br>
			Resposta B:<br><input id="b" type="text" class="edit"></input><br>
			Resposta C:<br> <input id="c" type="text" class="edit"></input><br>
			Resposta D:<br> <input id="d" type="text" class="edit"></input><br>
			Resposta E: <br><input id="e" type="text" class="edit"></input><br>
			Gabarito: <br><select id="template" style="width: 173px; height: 20px">
							<option value="0">Selecione um gabarito</option>
							<option value="1">A</option>
							<option value="2">B</option>
							<option value="3">C</option>
							<option value="4">D</option>
							<option value="5">E</option>
							</select></p>
			<p><div class="button" style="width: 180px; height: 40px;">
				<a href="#" onclick="add()">Adicionar questão</a></div></p>
			</div>
			<div id="footer"></div>
		</div>
		</center>
		
		<script type="text/javascript">
			var command = document.getElementById("command");
			var a = document.getElementById("a");
			var b = document.getElementById("b");
			var c = document.getElementById("c");
			var d = document.getElementById("d");
			var e = document.getElementById("e");
			
			var template = document.getElementById("template");
			
			function add()
			{
				if(template.selectedIndex > 0 && command.value != "" && a.value != ""
				&& b.value != "" && c.value != "" && d.value != "" && e.value != "" )
				{
					addQuest(command.value, a.value, b.value, c.value, d.value, e.value, template.selectedIndex);
				}
			}
		</script>
	</body>
<html>