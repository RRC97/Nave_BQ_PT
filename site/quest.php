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
			<div id="cotent">
				<?php
				if(ISTEACHER == '1')
				{
					echo '<p><div class="button" style="width: 180px; height: 40px;">' .
						'<a href="addquest.php">Adicionar questão</a></div></p>';
				}
				else
				{
					echo '<p><div class="button" style="width: 180px; height: 40px;">' .
						'<a href="oneshotquest.php">Resolver questão</a></div></p>';
				}
				?>
			</div>
			<div id="footer">
			</div>
		</div>
		</center>
    </body>
</html>