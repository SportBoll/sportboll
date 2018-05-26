<?php

    include("usuario.class.php");
   
    $nomeusuario = $_POST["nomeusuario"];
    $emailusuario = $_POST["emailusuario"];
    $enderecousuario = $_POST["enderecousuario"];
    $telefoneusuario = $_POST["telefoneusuario"];
    $cidadeusuario = $_POST["cidadeusuario"];
    $cpfusuario = $_POST["cpfusuario"];
    $loginusuario = $_POST["loginusuario"];
    $senhausuario = $_POST["senhausuario"];
   
    $individuo = new usuario();
    $individuo->setNomeusuario($nomeusuario);
    $individuo->setEmailusuario($emailusuario);
    $individuo->setEnderecousuario($enderecousuario);
    $individuo->setTelefoneusuario($telefoneusuario);
    $individuo->setCidadeusuario($cidadeusuario);
    $individuo->setCpfusuario($cpfusuario);
    $individuo->setLoginusuario($loginusuario);
    $individuo->setSenhausuario($senhausuario);
   
   echo $individuo->inserirDados();
?>
<br></br>
  <div class="control-group">
  <div class="controls">
  <input type="button" value="Logar" onclick="  location.href='index.php';" />
  </div>
  <br></br>
