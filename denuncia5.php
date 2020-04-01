
<!DOCTYPE HTML>
<html>
	<head>
		<title>Preenchimento de Dados</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

        <style>
            .lblb{
                display: inline;
                border: 0 10px 0 10px;
                padding: 10px 30px;
                 margin-left: 1px;
                font-size: 18px;
            }
                
                .lbl-date{
                    padding: 3px 15px;
                    font-size: 18px;
                    display: inline;
                    margin: 2px 10px;
                    background: #e8e8e8;
                    
                }
            .lblb1{
                 display: inline;
                border: 0 10px 0 10px;
                padding: 10px 80px;
                margin-left: 20px;
                font-size: 18px;
            }
            .lbl-date1{
                padding: 3px 15px;
                    font-size: 18px;
                    display: inline;
                    margin: 2px 10px;
                    background: #e8e8e8;
                text-align: center;
            }
                
            }
        </style>
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
						 <h2>Dados da Infração</h2>
						<p></p>
					</header>
 
									<form method="POST" action="salva_furto.php">
									<div class="row uniform">
                                          <div class="12u$">
											<div >     
                                               <input type="email" value="Roubo De Estabelecimento" name="denuncia" id="trafico" readonly/>
											</div>
										</div>
                    
										<div class="6u 12u$(xsmall)">
											<input type="text" name="nome" required maxlength="" id="name" value="" placeholder="Nome"/>
										</div>
                                        <div class="6u 12u$(xsmall)">
                                            <div>
                                             <label class="lblb">Data da Ocorrência </label><input class="lbl-date" name="dat" type="date" min="2018-01-30" max="2138-01-30">
                                            </div>
                                        </div>
										<div class="12u$">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<!-- Break -->
										<div class="6u 12u$(xsmall)">
											<div>     
                                                <input type="text" name="bairro" id="bairro" value="" placeholder="Bairro"/>
											</div>
										</div>
                                         <div class="6u 12u$(xsmall)">
                                            <div>
                                             <label class="lblb1">CEP</label><input class="lbl-date1" name="cep" type="number" step="1000">
                                            </div>
                                        </div>
                                        <div class="12u$">
											<div>     
                                                <input type="text" name="rua" id="rua" value="" placeholder="Rua"/>
											</div>
										</div>
                        
										<!-- Break -->
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-low" name="priority" value="baixa"checked>
											<label for="priority-low">Prioridade Baixa</label>
										</div>
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" name="priority" value="media"> 
											<label for="priority-normal">Prioridade Média</label>
										</div>
										<div class="4u$ 12u$(small)">
											<input type="radio" id="priority-high" name="priority" value= "alta">
											<label for="priority-high">Prioridade Alta</label>
										</div>
										<!-- Break -->
										<div class="12u$">
											<textarea name="mensagem" id="message" placeholder="Descrição da Infração" rows="6"></textarea>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41631.60721859605!2d-45.12994113017973!3d-22.73756993259726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccc9201d468adf%3A0xc9ce9c4b4546c622!2sLorena%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1584492588718!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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