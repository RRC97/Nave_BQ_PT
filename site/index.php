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
				<img src="res/logo.png"></img>
			</div>
			<div id="content">
				<div class="focused">
				<center>
					SECRETARIA DE EDUCAÇÃO<br><br>
				<img style="max-width: 250px; width: auto; height: auto;" src="res/seeducLogo.png">
				<p>
					<h3>Ultima noticia</h3>
					Alunos da rede estadual já têm mais um aliado nos preparativos para o Exame Nacional do Ensino Médio (Enem). O projeto #PartiuUniversidade é um guia para o estudante que deseja ingressar no Ensino Superior.
				<br><a href="http://www.rj.gov.br/web/seeduc/listaconteudo?search-type=noticias" target="_blank">
				<br>Veja mais noticias
				</center></a></p>
				
				</div>
				<br>
				<div class="focused">
				<center>
					INSCRIÇÕES ABERTAS!<br><br>
				<img style="max-width: 250px; width: auto; height: auto;" src="res/enemLogo.jpg">
				<p>
					<h3>Sobre as inscrições</h3>
					De acordo com o último balanço divulgado pelo Ministério da Educação (MEC), as inscrições do Enem 2015 (Exame Nacional do Ensino Médio) já somam cerca de 1 milhão. Apenas nas primeiras 09 horas, 410 mil candidatos já haviam sido inscritos.
				<br><br><a href="http://enem.inep.gov.br/" target="_blank">Sabia como se inscrever</a><br></center></a></p>
				</div>
			</div>
			<div id="extra">
					<center>
					<?php
						if($logged)
						{
							echo '
							<p><div class="button" style="width: 200px; height: 40px;">
							<a href="oneshotquest.php"><span>Questão relâmpago</span></a></div></p>
							<p><div class="button" style="width: 200px; height: 40px;">
							<a href="shop.php"><span>Loja</span></a></div></p>
							<p>
							ITEM NOVO
							<div id="valueItem" class="focused">Adicione uma questão mesmo sendo aluno!<br>
							<img style="width: 180px;" src="res/itemTodoQuest.png"></img><br>
								10 <img src="res/money_icon.png" height="20px"></img>
							</div><br></p>
							
							<p>
								
								<p><div class="button" style="width: 200px; height: 40px;">
								<a href="http://alunoonline.educacao.rj.gov.br/AlunoOnline/Seguranca/Identificacao.aspx?ReturnUrl=/alunoonline/default.aspx%29"><span>Boletim Online</span></a></div></p>
							</p>';
						}
						else
						{
							echo '
							<p><div class="button" style="width: 200px; height: 40px;">
							<a href="login.php"><span>Entrar</span></a></div></p>
							<p><div class="button" style="width: 200px; height: 40px;">
							<a href="signin.php"><span>Cadastrar</span></a></div></p>';
						}
						?>
					</center>
			</div>
		</div>
		</center>
    </body>
</html>
