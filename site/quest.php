<html>	
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
			<div id="header">
				<img src="res/logo.png" height="150px"></img>
			</div>
			<div id="content">
				<div class="focused">
				<center><h3>Questão relâmpago</h3></center>
				O banco de questões escolhe uma questão aleatória de qualquer matéria<p>
				Recompensa: 10 <img src='res/coin_icon.png' height='20px'></img></p>
				</div>
			</div>
			<div id="extra">
				<?php
				if(ISTEACHER == '1')
				{
					echo '<p><div class="button" style="width: 200px; height: 40px;">' .
						'<a href="addquest.php">Adicionar questão</a></div></p>';
				}
				else
				{
					echo '<p><div class="button" style="width: 200px; height: 40px;">' .
						'<a href="oneshotquest.php">Questão relâmpago</a></div></p>';
				}
				?>
			</div>
		</div>
		</center>
    </body>
</html>