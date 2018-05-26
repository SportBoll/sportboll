<?php
session_start();
	$loginusuario = $_POST["loginusuario"];
    $senhausuario = $_POST["senhausuario"];


    include "acessa.php"; 
    $sql = "Select * from usuario where loginusuario = '$loginusuario' AND senhausuario ='$senhausuario'";
   
    if(!$resultado = $conexao->query($sql)) {
        trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
        $conexao->error, E_USER_ERROR);
    }
    else {
        while($linha = $resultado->fetch_assoc()) {
        //guarda na variavel linha (um array) o resultado de cada
        // linha vinda do banco de dados
            $loginBD = $linha["loginusuario"];
            $senhaBD = $linha["senhausuario"];
            $idBD = $linha["idusuario"];

        }
    }
    if (($loginBD == $loginusuario) &&
    ($senhaBD==$senhausuario)){
       
        $_SESSION["login"]=$user;
        $_SESSION["senhausuario"]=$senhausuario;
        $_SESSION["loginusuario"]=$loginusuario;
        $_SESSION["idusuario"]=$idBD ;
        header("location:loginusuario.php");
    }
    else {
    echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
exit();
    }
   ?>