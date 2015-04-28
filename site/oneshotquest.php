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
				alert("Você não ganhará nada fazendo questões");
			}
		</script>
		
		<center>
		<div id="context">
			<div id="header">
				<img src="res/logo.png" height="150px"></img>
			</div>
			<div id = "content">
			
			<input type="radio" name="response">A ) </input><br>
			<input type="radio" name="response">B ) </input><br>
			<input type="radio" name="response">C ) </input><br>
			<input type="radio" name="response">D ) </input><br>
			<input type="radio" name="response">E ) </input><br>
			<p><div class="button" style="width: 180px; height: 40px;">
				<a href="#" onclick="responseQuest()">Feito</a></div></p>
			</div>
			<div id="footer"></div>
		</div>
		</center>
		
		<script type="text/javascript">
			function responseQuest()
			{
				alert("Funcão inativa");
			}
		</script>
	</body>
<html>