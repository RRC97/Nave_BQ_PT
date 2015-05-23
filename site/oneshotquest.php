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
			if(isTeacher == "1")
			{
				alert("Você não ganhará nada resolvendo questões");
			}
		</script>
		
		<?php
			include("php/getquest.php");
		?>
		
		<center>
		<div id="context">
			<div id="header">
				<img src="res/logo.png" height="150px"></img>
			</div>
			<div id = "content">
			
			<div id="command"></div>
			
			<input id="1" type="radio" name="response"><span id="a"></span></input><br>
			<input id="2" type="radio" name="response"><span id="b"></span></input><br>
			<input id="3" type="radio" name="response"><span id="c"></span></input><br>
			<input id="4" type="radio" name="response"><span id="d"></span></input><br>
			<input id="5" type="radio" name="response"><span id="e"></span></input><br>
			<p><div class="button" style="width: 180px; height: 40px;">
				<a href="#" onclick="responseQuest()">Feito</a></div></p>
			</div>
			<div id="footer"></div>
		</div>
		
		<script type="text/javascript" src="js/correctquest.js"></script>
		
		<script type="text/javascript">
		
			var quest = <?php getQuest();?>;
			
			document.getElementById("command").innerHTML = quest[1];
			document.getElementById("a").innerHTML = "A) " + quest[2];
			document.getElementById("b").innerHTML = "B) " + quest[3];
			document.getElementById("c").innerHTML = "C) " + quest[4];
			document.getElementById("d").innerHTML = "D) " + quest[5];
			document.getElementById("e").innerHTML = "E) " + quest[6];
		
			function responseQuest()
			{
				var radios = document.getElementsByName("response");
				var response = "";
				for(var i = 0; i < radios.length; i++)
				{
					if(radios[i].checked)
					{
						response = radios[i].id;
					}
				}
				if(response != "")
					correct(quest[0], response);
				else
					alert("Selecione uma resposta");
			}
		</script>
		
		</center>
	</body>
<html>