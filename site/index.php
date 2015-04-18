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
		<div id="context">
			Seu e-mail é: <?php echo EMAIL ?>
		</div>
    </body>
</html>
