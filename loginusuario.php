<?php
session_start();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>
        <title>SportBoll</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><!--Acentuação-->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><!--Acentuação-->
        <meta name="description" content="">
        <meta name="viewposrt" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="videos/video.mp4" type="video/mp4">
            <source src="videos/video.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video>
        </section>
        
        <section class="cd-hero">

          <div class="cd-slider-nav"><!-- Inicio Menu -->
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="#0"><div class="image-icon"><img src="img/local-icon.png"></div><h6>
				Locais</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/engrenagem-icon.png"></div><h6>
				Editar</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/excluir-icon.png"></div><h6>
				Excluir</h6></a></li>
				<li><a href="index.php"><div class="image-icon"><img src="img/seta-esquerda-icon.png" onclick="  location.href='index.php';"></div><h6>
				Voltar</h6></a></li>

               	         </ul>
            </nav> 
          </div> <!-- Fim Menu -->

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
			<h1>Altera Cadastro</h1>

		</div>
		<div class="cd-half-width third-slide">
			<!-- Numero qual icone é e pg  -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content third-content">
							<div class="row">
								<div class="left-proprietario-text">
									

<h4>Editando cadastro</h4>        


    <br></br>
           





											</div>
										</div>
									</form>


            <li>
              <div class="heading">
                <h1>Excluir Cadastro</h1> <!-- Cadastro Proprietario -->

              </div>
              <div class="cd-half-width third-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content third-content">
                        <div class="row">
                          <div class="left-proprietario-text">
                          <!-- Cadastro Proprietario -->
                          <h4>Excluindo Conta</h4>
                                                   
         
            
		<form action="excluirusuario.php" method="post">
		 Você tem certeza que quer excluir sua conta?
		 <p></p>
		<input type="submit" name="deletar" style="display: inline-block; background-color: #ffbb05; color: #343434; font-size: 13px; padding: 12px 18px;border-radius: 3px; text-decoration: none; border: 1px solid transparent; " value="Sim, Excluir"/> <br/>
		Não,
        <a href="loginusuario.php">Voltar</a>
</form>

		
		
		
		
		
			                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

          

        <footer>
          <p>Copyright © 2017 |  <a href="https://www.facebook.com/daniel.breda.9" target="_blank"><em>Daniel 
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