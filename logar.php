<?php
    session_start();


    $login = $_POST["login"];
    $senha = $_POST["senha"];



    include "acessa.php"; 
    $sql = "Select * from usuario where login = '$login' AND senha ='$senha'";
   
    if(!$resultado = $conexao->query($sql)) {
        trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
        $conexao->error, E_USER_ERROR);
    }
    else {
        while($linha = $resultado->fetch_assoc()) {
        
                    $login = $linha["login"];
            $senha = $linha["senha"];
        }
    }
    if (($login == $user) &&
    ($senha==$senha)){
       
        $_SESSION["login"]=$user;
        $_SESSION["senha"]=$senha;
        $_SESSION["login"]=$login;
        header("location:restritauser.php");
    }
    else {
        header("location:loginusuario.php");
    }
   ?>