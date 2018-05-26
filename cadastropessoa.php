<?php
    include("usuario.class.php");
   
    $nome = $_POST["nome"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $nascimento = $_POST["nascimento"];
   
    $individuo = new Pessoa();
    $individuo->setNome($nome);
    $individuo->setRua($rua);
    $individuo->setNumero($numero);
    $individuo->setAnoNascimento($nascimento);
    $individuo->setDia($dia);
    $individuo->setMes($mes);
    $individuo->setIdade();
   
    $dados = $individuo->endereco();
    echo "$dados <br/>";
   
    $dados = $individuo->dados();
    echo "<br/>$dados <br/>";
   
   
   
   
?>