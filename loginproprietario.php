<?php
session_start();
?>

<!doctype html><!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">

<![endif]--><!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="">

<![endif]--><!--[if IE 8]>
<html class="no-js lt-ie9" lang="">

<![endif]--><!--[if gt IE 8]>
<!-->
<html class="no-js" lang="">

<!--<![endif]-->

<head>
<title>SportBoll</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<!--Acentuação-->
<meta charset="utf-8">
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
<!--Acentuação-->
<meta content="" name="description">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/fontAwesome.css" rel="stylesheet">
<link href="css/templatemo-style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script type="text/javascript" src="verificacpf.js"></script>
<script type="text/javascript" src="verificacnpj.js"></script>

</head>

<body>

<div class="overlay">
</div>
<section class="top-part">
	<video autoplay="" controls="" loop="">
	<source src="videos/video.mp4" type="video/mp4">
	<source src="videos/video.ogg" type="video/ogg">
	</video>
</section>
<section class="cd-hero">
	<div class="cd-slider-nav">
		<!-- Inicio Menu -->
		<nav>
			<span class="cd-marker item-1"></span>
			<ul>
				<li class="selected"><a href="#0">
				<div class="image-icon">
					<img src="img/inicio-icon.png"></div>
				<h6>Home</h6>
				</a></li>
				<li><a href="#0">
				<div class="image-icon">
					<img src="img/engrenagem-icon.png"></div>
				<h6>Editar</h6>
				</a></li>
				<li><a href="#0">
				<div class="image-icon">
					<img src="img/excluir-icon.png"></div>
				<h6>Excluir</h6>
				</a></li>
				<li><a href="#0">
				<div class="image-icon">
					<img src="img/relatorio-icon.png"></div>
				<h6>Relatório</h6>
				</a><li><a href="index.php"><div class="image-icon"><img src="img/seta-esquerda-icon.png" onclick="  location.href='index.php';"></div><h6>
				Voltar</h6></a></li>

			</ul>
		</nav>
	</div>
	<!-- Fim Menu -->
	<ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading"><!-- Tela Principal -->
                
              <h1>Olá seja bem vindo ao SportBoll!</h1>
              </div>
              <div class="cd-half-width second-slide">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                       <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/esquerda-aboutimage.jpeg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>Ginasio Vetor</h4>
                              <p>O ginasio Vetor se encontra na rua Germano Hoffman numero 850, uma quadra de aproximadamente 1.125m² quadrados, o ginásio vetor possui vestiário próprio, equipados com duchas a gás, armários com chaves e secadores de cabelo.</p>
                              <div class="primary-button">
                                <a href="ginasiovetor.php">Ver Horários</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Ginasio Sea</h4>
                              <p>O ginasio Sea se encontra na rua Severiano de Almeida numero 789, uma quadra de aproximadamente 1.125m² quadrados, o ginásio vetor possui vestiário próprio, equipados com duchas a gás, armários com chaves e secadores de cabelo.</p>
                              <div class="primary-button">
                                <a href="ginasiosea.php">Ver Horários</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="img/direita-aboutimage.jpeg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>



		<li>
		<div class="heading">
			<h1>Editar</h1>
		</div>
		<div class="cd-half-width third-slide">
			<!-- Numero qual icone é e pg  -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content third-content">
							<div class="row">
								<div class="left-proprietario-text">
									<h4>Alterando Cadastro</h4>
									
									
									
									
									
										 </div>
										</div>
									</form>
		<li>
		<div class="heading"><!-- Tela Principal -->
                
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content first-content">
                        
<h4>Excluindo Conta</h4>
                                                   
         
            
		<form action="excluirproprietario.php" method="post">
		 Você tem certeza que quer excluir sua conta?
		 <p></p>
		<input type="submit" name="deletar" style="display: inline-block; background-color: #ffbb05; color: #343434; font-size: 13px; padding: 12px 18px;border-radius: 3px; text-decoration: none; border: 1px solid transparent; " value="Sim, Excluir"/> <br/>
		Não,
        <a href="loginproprietario.html">Voltar</a>
</form>

		




									<li>
									<div class="heading">
										<h1>Relatório</h1>
										
								</div>
									<div class="cd-half-width third-slide">
										<!-- Numero qual icone é e pg  -->
										<div class="container">
											<div class="row">
												<div class="col-md-12">
													<div class="content third-content">
														<div class="row">
															<div class="left-feature-text">
															</div>
															<div class="left-feature-text">
																
																<h4>Gerando Relatório</h4>
																
																<p>Cadastro para quem for praticante 
																do esporte!</p>
																









															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									</li>
									</form>
																	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</li>
	</ul>
</section>
<footer>
	<p>Copyright © 2017 |
	<a href="https://www.facebook.com/daniel.breda.9" target="_blank"><em>Daniel 
	Maikel Breda |</em></a>
	<a href="ajuda.php" target="_blank"><em>Precisa 
	de Ajuda? Clique Aqui!</em></a> </p>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>

</html>
<![endif]-->