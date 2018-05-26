<?php

    include("proprietario.class.php");
   
    $nomeproprietario = $_POST["nomeproprietario"];
    $emailproprietario = $_POST["emailproprietario"];
    $enderecoproprietario = $_POST["enderecoproprietario"];
    $telefoneproprietario = $_POST["telefoneproprietario"];
    $cidadeproprietario = $_POST["cidadeproprietario"];
    $cnpjproprietario = $_POST["cnpjproprietario"];
    $loginproprietario = $_POST["loginproprietario"];
    $senhaproprietario = $_POST["senhaproprietario"];
   
    $individuo = new proprietario();
    $individuo->setNomeproprietario($nomeproprietario);
    $individuo->setEmailproprietario($emailproprietario);
    $individuo->setEnderecoproprietario($enderecoproprietario);
    $individuo->setTelefoneproprietario($telefoneproprietario);
    $individuo->setCidadeproprietario($cidadeproprietario);
    $individuo->setCnpjproprietario($cnpjproprietario);
    $individuo->setLoginproprietario($loginproprietario);
    $individuo->setSenhaproprietario($senhaproprietario);
   
   echo $individuo->inserirDados();
?>

   <h2>Cadastrado efetuado com sucesso!!</h2>

  <div class="control-group">
  <div class="controls">
  <input type="button" value="Logar" onclick="  location.href='index.php';" />
  </div>
  <br></br>

<!--


<link href="style.css" rel="stylesheet" type="text/css"/>
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$cpf = $_POST['cpf'];
$login = $_POST['login'];
$senha = $_POST['senha'];


include "acessa.php";

$sql="INSERT INTO usuario (id,nome,email,endereco,telefone,cidade,cpf,login,senha) VALUES ('','$nome','$email','$endereco','$telefone','$cidade','$cpf','$login','$senha')";
if($conexao->query($sql) === false) {
	trigger_error('Erro na SQL: ' . $sql 	. ' Erro: ' . 
	$conexao->error, E_USER_ERROR);
} else {
	$last_inserted_id = $conexao->insert_id; //ultima id inserir
	$affected_rows = $conexao->affected_rows; //linhas afetadas
	echo "A id cadastrada é: id $last_inserted_id";
	
}

?>

<h2>Usuário cadastrado com sucesso!!</h2>

<form action="logar.php" method="post">
<input name="submit" type="Submit" value="Logar"/>
<p>&nbsp;</p>



-->
