
	<?php
		include("php/connect.php");
	?>

<div id='barmain'>
	<ul>
		
		<li class='button'><a href='index.php'>Inicio</a></li>
		<li class='button'><a href='quest.php'>Questões</a></li>
		<li class='button'><a href='task.php'>Tarefas</a></li>
		<div style='float: right;'>
		<?php
			if($logged)
			echo "<li class='button'><a href='shop.php'>" . COIN . " <img src='res/coin_icon.png' height='20px'></img></a></li>
			<li class='button'><a href='shop.php'>" . MONEY ." <img src='res/money_icon.png' height='20px'></img></a></li>
			<li class='button'><a href='perfil.php'>".USER."</a></li>
			<li class='button'><a href='?off=true'>Sair</a></li>";
			else
			echo
				"<li class='button'><a href='login.php'>Entrar</a></li>
				<li class='button'><a href='signin.php'>Cadastrar</a></li>";
		?>
		</div>
	</ul>
</div>