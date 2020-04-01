<!DOCTYPE HTML>
<html>
	<head>
		<title>Preenchimento de Dados</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<a href="index.php">Início</a>
						<a href="generic.php">Visualizar Relatórios</a>
						<a href="demo.php">Contato</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Cadastramento</h2>
						<p></p>
					</header>

				<!-- Content -->
					<h2 id="content" class="textMid">Instruções Básicas</h2>
					<p>Aqui você deve preencher, como ocorreu o seu devido problema, tendo ele sido um assalto completo, uma ameaça ou apenas tenha visto um assalto ser realizado.<p>   
                
						
							<!-- Form -->
								<h3>Dados da Infração</h3>

								<form method="post" action="salva_mensagem.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Nome"/>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<!-- Break -->
										<div class="12u$">
											<div class="select-wrapper">
												<select name="category" id="category">
													<option value="">Tráfico Intenso</option>
													<option value="1">Furto</option>
													<option value="1">Assalto</option>
													<option value="1">Assalto A Mão Armada</option>
													<option value="1">Roubo de Carro</option>
													<option value="1">Roubo de Estabelecimento</option>
												</select>
											</div>
										</div>
										<!-- Break -->
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-low" name="priority" checked>
											<label for="priority-low">Prioridade Baixa</label>
										</div>
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" name="priority">
											<label for="priority-normal">Prioridade Média</label>
										</div>
										<div class="4u$ 12u$(small)">
											<input type="radio" id="priority-high" name="priority">
											<label for="priority-high">Prioridade Alta</label>
										</div>
										<!-- Break -->
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Descrição da Infração" rows="6"></textarea>
										</div>
										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Enviar" /></li>
												<li><input type="reset" value="Limpar" class="alt" /></li>
											</ul>
										</div>
									</div>
								</form>

								<hr />

							<!-- Maps -->
                    <br>
								<h3 class="midfeed">Mapa Operacional</h3>

								<div class="flex flex-2">
						  <div class="maps">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29453.834691089585!2d-45.02881384603102!3d-              22.663877998683933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cccac305a271ab%3A0xdba0e8e733c077d3!2sCachoeira%20Paulista%2C%20SP%2C%2012630-000!5e0!3m2!1spt-BR!2sbr!4v1577044393800!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                          </div>
					      </div>

								
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Untitled. Design by: Villas<br>Images by: Unsplash.
						</div>
						<ul class="icons1">
							<li><a href="" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
						</ul>
					</div>
				</div>
			</footer>
                     <hr>
                </div>
        </section>

	
	</body>
</html>