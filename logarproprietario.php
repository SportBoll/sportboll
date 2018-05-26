<?php
session_start();
	$loginproprietario = $_POST["loginproprietario"];
    $senhaproprietario = $_POST["senhaproprietario"];


    include "acessa.php"; 
    $sql = "Select * from proprietario where loginproprietario = '$loginproprietario' AND senhaproprietario ='$senhaproprietario'";
   
    if(!$resultado = $conexao->query($sql)) {
        trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
        $conexao->error, E_USER_ERROR);
    }
    else {
        while($linha = $resultado->fetch_assoc()) {
        //guarda na variavel linha (um array) o resultado de cada
        // linha vinda do banco de dados
            $loginBDproprie = $linha["loginproprietario"];
            $senhaBDproprie = $linha["senhaproprietario"];
            $idBDproprie = $linha["idproprietario"];
        }
    }
    if (($loginBDproprie == $loginproprietario) &&
    ($senhaBDproprie==$senhaproprietario)){
       
        $_SESSION["login"]=$user;
        $_SESSION["senhaproprietario"]=$senhaproprietario;
        $_SESSION["loginproprietario"]=$loginproprietario;
        $_SESSION["idproprietario"]=$idBDproprie ;
        header("location:loginproprietario.php");
    }
    else {
            echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
exit();

    }
   ?>