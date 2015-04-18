<div id='barmain'>
	<ul>
		
		<li class='button'><a href='index.php'>Inicio</a></li>
		<li class='button'><a href='quest.php'>Questões</a></li>
		<li class='button'><a href='#'>Tarefas</a></li>
		<div style='float: right;'>
		<?php
			if($logged)
			echo "<li class='button'><a href='#'>" . COIN . " <img src='res/coin_icon.png' height='20px'></img></a></li>
			<li class='button'><a href='#'>" . MONEY ." <img src='res/money_icon.png' height='20px'></img></a></li>
			<li class='button'><a href='#'>".USER."</a></li>
			<li class='button'><a href='#'>Sair</a></li>";
			else
			echo
				"<li class='button'><a href='#'>Entrar</a></li>";
		?>
		</div>
	</ul>
</div>