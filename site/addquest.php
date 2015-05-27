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
			
			<div id="content">
			Comando: <br><textarea id="command" type="text" cols="60" rows="3"></textarea><br>
			Explicação A: <br><textarea id="expA" type="text" cols="60" rows="2"></textarea><br>
			Explicação B: <br><textarea id="expB" type="text" cols="60" rows="2"></textarea><br>
			Explicação C: <br><textarea id="expC" type="text" cols="60" rows="2"></textarea><br>
			Explicação D: <br><textarea id="expD" type="text" cols="60" rows="2"></textarea><br>
			Explicação E: <br><textarea id="expE" type="text" cols="60" rows="2"></textarea><br>
			</div>
			<div id = "extra">
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
							</select>
			Matéria: <br><select id="subject" style="width: 173px; height: 20px">
							<option value="0">Selecione uma matéria</option>
							<option value="1">Matemática</option>
							<option value="2">Português</option>
							<option value="3">Outra</option>
							</select></p>
			<p><div class="button" style="width: 180px; height: 40px;">
				<a href="#" onclick="add()">Adicionar questão</a></div></p>
			</div>
		</div>
		</center>
		
		<script type="text/javascript">
			var command = document.getElementById("command");
			var a = document.getElementById("a");
			var b = document.getElementById("b");
			var c = document.getElementById("c");
			var d = document.getElementById("d");
			var e = document.getElementById("e");
			var expA = document.getElementById("expA");
			var expB = document.getElementById("expB");
			var expC = document.getElementById("expC");
			var expD = document.getElementById("expD");
			var expE = document.getElementById("expE");
			
			var template = document.getElementById("template");
			var subject = document.getElementById("subject");
			
			function add()
			{
				if(template.selectedIndex > 0 && subject.selectedIndex > 0 && command.value != "" && a.value != ""
				&& b.value != "" && c.value != "" && d.value != "" && e.value != "" &&
				expA.value != "" && expB.value != "" && expC.value != "" && expD.value != "" && expE.value != "")
				{
					addQuest(command.value, a.value, b.value, c.value, d.value, e.value, expA.value, expB.value,
					expC.value, expD.value, expC.value, subject.selectedIndex, template.selectedIndex);
				}
			}
		</script>
	</body>
<html>