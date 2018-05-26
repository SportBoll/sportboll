<?php  
    class Proprietario {
        private $nomeproprietario;
        private $emailproprietario;
        private $enderecoproprietario;
        private $telefoneproprietario;
        private $cidadeproprietario;
        private $cnpjproprietario;
        private $loginproprietario;
        private $senhaproprietario;
        private $idproprietario;
       
        public function __construct(){
            $this->nomeproprietario="";
            $this->emailproprietario="";
            $this->enderecoproprietario="";
            $this->telefoneproprietario="";
            $this->cidadeproprietario="";
            $this->cnpjproprietario="";
            $this->loginproprietario="";
            $this->senhaproprietario="";
            $this->idproprietario;
        }
       
        public function getIdproprietario(){
            return $this->id;
        }
       
        public function setIdproprietario($idproprietario){
            $this->idproprietario = $idproprietario;
        }
       
        public function getNomeproprietario(){
            return $this->nomeproprietario;
        }
       
        public function setNomeproprietario($nomeproprietario){
                $this->nomeproprietario = $nomeproprietario;
        }
       
        public function getEmailproprietario(){
            return $this->emailproprietario;
        }
       
        public function setEmailproprietario($emailproprietario){
            $this->emailproprietario = $emailproprietario;
        }
       
        public function getEnderecoproprietario(){
            return $this->enderecoproprietario;
        }
       
        public function setEnderecoproprietario($enderecoproprietario){
            $this->enderecoproprietario = $enderecoproprietario;
        }
       
        public function getTelefoneproprietario(){
            return $this->Telefoneproprietario;
        }
       
        public function setTelefoneproprietario($telefoneproprietario){
            $this->telefoneproprietario = $telefoneproprietario;
        }
       
        public function getCidadeproprietario(){
            return $this->Cidadeproprietario;
        }
       
        public function setCidadeproprietario($cidadeproprietario){
            $this->cidadeproprietario = $cidadeproprietario;
        }
       
        public function getCnpjproprietario(){
            return $this->cnpjproprietario;
        }
       
        public function setCnpjproprietario($cnpjproprietario){
            $this->cnpjproprietario = $cnpjproprietario;
        }
       
        public function getLoginproprietario(){
            return $this->loginproprietario;
        }
       
        public function setLoginproprietario($loginproprietario){
            $this->loginproprietario = $loginproprietario;            
        }
        
        public function getSenhaproprietario(){
            return $this->senhaproprietario;
        }
       
        public function setSenhaproprietario($senhaproprietario){
            $this->senhaproprietario = $senhaproprietario;            
        }

       
        public function inserirDados() {
            include "acessa.php";
            $idproprietario = $this->idproprietario;
            $nomeproprietario = $this->nomeproprietario;
            $emailproprietario = $this->emailproprietario;
            $enderecoproprietario = $this->enderecoproprietario;
            $telefoneproprietario = $this->telefoneproprietario;
            $cidadeproprietario = $this->cidadeproprietario;
            $cnpjproprietario =  $this->cnpjproprietario;
            $loginproprietario = $this->loginproprietario;
            $senhaproprietario = $this->senhaproprietario;
           
            $sql="INSERT INTO proprietario (idproprietario, nomeproprietario, emailproprietario, enderecoproprietario, telefoneproprietario, cidadeproprietario, cnpjproprietario, loginproprietario, senhaproprietario )
           VALUES ('','$nomeproprietario','$emailproprietario','$enderecoproprietario','$telefoneproprietario','$cidadeproprietario','$cnpjproprietario','$loginproprietario','$senhaproprietario')";
            if($conexao->query($sql) === false) {
                trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
                $conexao->error, E_USER_ERROR);
            }
            else {
                echo "Cadastro de Proprietario efetuado com sucesso";
            }
            $conexao->close();
        }
              
       
        public function excluirDados($idproprietario) {
            include "acessa.php";
            $sql="Delete from proprietario where idproprietario= '$idproprietario'";
            if($conexao->query($sql) === false) {
                trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
                $conexao->error, E_USER_ERROR);
            }
            else {
                echo "Conta excluida com sucesso! Obrigado por usar o SportBoll";
            }
            $conexao->close();
        }
       
        public function editaDados($id) {
            include "acessa.php";
            
            $nomeproprietario = $this->nomeproprietario;
            $emailproprietario = $this->emailproprietario;
            $enderecoproprietario = $this->enderecoproprietario;
            $telefoneproprietario = $this->telefoneproprietario;
            $cidadeproprietario = $this->cidadeproprietario;
            $cnpjproprietario = $this->cnpjproprietario;
            $loginproprietario = $this->loginproprietario;
            $senhaproprietario = $this->senhaproprietario;
            
            $sql="Update proprietario set (idproprietario, nomeproprietario, emailproprietario, enderecoproprietario, telefoneproprietario, cidadeproprietario, cnpjproprietario, loginproprietario, senhaproprietario )
           VALUES ('','$nomeproprietario','$emailproprietario','$enderecoproprietario','$telefoneproprietario','$cidadeproprietario','$cnpjproprietario','$loginproprietario','$senhaproprietario')";

            if($conexao->query($sql) === false) {
                trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
                $conexao->error, E_USER_ERROR);
            }
            else {
                echo "Cadastro de pessoa alterado com sucesso";
            }
            $conexao->close();
        }
       
       
    }
?>