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
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <li class="selected"><a href="#0"><div class="image-icon"><img src="img/formulario-icon.png"></div><h6>
				Editando</h6></a></li>
               	         </ul>
            </nav> 
          </div> <!-- Fim Menu -->

          <ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading"><!-- Tela Principal -->
                
<h1>Olá <!--<?php echo$nomedocaraquefezlogin;?> -->!</h1>
        
       <form action="editandoproduto.php" method="post">
       
       
              <div class="heading">
              </div>
              <div class="cd-half-width third-slide"> <!-- Numero qual icone é e pg  -->
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content third-content">
                        <div class="row">
                          <div class="left-feature-text">

                            </div>
                              <div class="left-feature-text">
                              <h4>Editando cadastro</h4>
                                         

<?php

$nomeusuario = $_POST['nomeusuario'];
$emailusuario = $_POST['emailusuario'];
$enderecousuario = $_POST['enderecousuario'];
$telefoneusuario = $_POST['telefoneusuario'];
$cidadeusuario = $_POST['cidadeusuario'];
$cpfusuario = $_POST['cpfusuario'];
$loginusuario = $_POST['loginusuario'];
$senhausuario = $_POST['senhausuario'];


include "acessa.php";

$sql="Update usuario set nomeusuario='$nomeusuario',emailusuario='$emailusuario',enderecousuario='$enderecousuario',telefoneusuario='$telefoneusuario',cidadeusuario='$cidadeusuario',cpfusuario='$cpfusuario',loginusuario='$loginusuario',senhausuario='senhausuario'";

if($conexao->query($sql) === false) {
	trigger_error('Erro na SQL: ' . $sql 	. ' Erro: ' . 
	$conexao->error, E_USER_ERROR);
} else {
	$last_inserted_id = $conexao->insert_id; //ultima id inserir
	$affected_rows = $conexao->affected_rows; //linhas afetadas
	echo "Alteramos $affected_rows registro(s)";
	
}

?>

<p>Nome: <?php echo $nomeusuario; ?></p>
<p>Telefone:<?php echo $telefone; ?></p>
<p>Endereço:<?php echo $endereco; ?></p>
<p>Cnpj:<?php echo $cnpj; ?></p>
<p>Email:<?php echo $email; ?></p>

               
                              
                                             
        </form><form action="loginusuario.php" method="post">
            Você tem certeza que deseja alterar as informações da sua conta?
            <input type="submit" name="editar" value="Editar"/> <br/>
            
            <br></br>
            Clique aqui para voltar!
            <?php
             ?>
              <input type="button" value="Voltar" onclick="  location.href='loginusuario.php';" /> 
            </a>
</form>

                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

</section>
<footer>
	<p>Copyright © 2017 |
	<a href="https://www.facebook.com/daniel.breda.9" target="_blank"><em>Daniel 
	Maikel Breda |</em></a>
	<a href="ajuda.php" target="_parent"><em>Precisa 
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