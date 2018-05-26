<?php  
    class Usuario {
        private $nomeusuario;
        private $emailusuario;
        private $enderecousuario;
        private $telefoneusuario;
        private $cidadeusuario;
        private $cpfusuario;
        private $loginusuario;
        private $senhausuario;
        private $idusuario;
       
        public function __construct(){
            $this->nomeusuario="";
            $this->emailusuario="";
            $this->enderecousuario="";
            $this->telefoneusuario="";
            $this->cidadeusuario="";
            $this->cpfusuario="";
            $this->loginusuario="";
            $this->senhausuario="";
            $this->idusuario;

        }
       
        public function getIdusuario(){
            return $this->idusuario;
        }
       
        public function setIdusuario($idusuario){
            $this->idusuario = $idusuario;
        }
       
        public function getNomeusuario(){
            return $this->nomeusuario;
        }
       
        public function setNomeusuario($nomeusuario){
                $this->nomeusuario = $nomeusuario;
        }
       
        public function getEmailusuario(){
            return $this->emailusuario;
        }
       
        public function setEmailusuario($emailusuario){
            $this->emailusuario = $emailusuario;
        }
       
        public function getEnderecousuario(){
            return $this->enderecousuario;
        }
       
        public function setEnderecousuario($enderecousuario){
            $this->enderecousuario = $enderecousuario;
        }
       
        public function getTelefoneusuario(){
            return $this->telefoneusuario;
        }
       
        public function setTelefoneusuario($telefoneusuario){
            $this->telefoneusuario = $telefoneusuario;
        }
       
        public function getCidadeusuario(){
            return $this->cidadeusuario;
        }
       
        public function setCidadeusuario($cidadeusuario){
            $this->cidadeusuario = $cidadeusuario;
        }
       
        public function getCpfusuario(){
            return $this->cpfusuario;
        }
       
        public function setCpfusuario($cpfusuario){
            $this->cpfusuario = $cpfusuario;
        }
       
        public function getLoginusuario(){
            return $this->loginusuario;
        }
       
        public function setLoginusuario($loginusuario){
            $this->loginusuario = $loginusuario;            
        }
        
        public function getSenhausuario(){
            return $this->senhausuario;
        }
       
        public function setSenhausuario($senhausuario){
            $this->senhausuario = $senhausuario;            
        }

       
        public function inserirDados() {
            include "acessa.php";
            $idusuario = $this->idusuario;
            $nomeusuario = $this->nomeusuario;
            $emailusuario = $this->emailusuario;
            $enderecousuario = $this->enderecousuario;
            $telefoneusuario = $this->telefoneusuario;
            $cidadeusuario = $this->cidadeusuario;
            $cpfusuario =  $this->cpfusuario;
            $loginusuario = $this->loginusuario;
            $senhausuario = $this->senhausuario;
           
            $sql="INSERT INTO usuario (idusuario, nomeusuario, emailusuario, enderecousuario, telefoneusuario, cidadeusuario, cpfusuario, loginusuario, senhausuario )
           VALUES ('','$nomeusuario','$emailusuario','$enderecousuario','$telefoneusuario','$cidadeusuario','$cpfusuario','$loginusuario','$senhausuario')";
            include "email.php";
            if($conexao->query($sql) === false) {
                trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
                $conexao->error, E_USER_ERROR);
                
            }
            else {
                echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
exit();
                
            }
            $conexao->close();
        }
       
                    
        public function excluirDados($idusuario) {
            include "acessa.php";
            $sql="Delete from usuario where idusuario= '$idusuario'";
            if($conexao->query($sql) === false) {
                trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
                $conexao->error, E_USER_ERROR);
            }
            else {
                echo "Conta excluida com sucesso! Obrigado por usar o SportBoll";
            }
            $conexao->close();
        }
       
        public function editaDados() {
            include "acessa.php";
            $nomeusuario = $this->nomeusuariousuario;
            $emailusuario = $this->emailusuario;
            $enderecousuario = $this->enderecousuario;
            $telefoneusuario = $this->telefoneusuario;
            $cidadeusuario = $this->cidadeusuario;
            $cpfusuario = $this->cpfusuario;
            $loginusuario = $this->loginusuario;
            $senhausuario = $this->senhausuario;
            
                        
            $sql="Update usuario set nomeusuario='$nomeusuario',emailusuario='$emailusuario',enderecousuario='$enderecousuario',telefoneusuario='$telefoneusuario',cidadeusuario='$cidadeusuario',cpfusuario='$cpfusuario',loginusuario='$loginusuario',senhausuario='senhausuario'";
            if($conexao->query($sql) === false) {
                trigger_error('Erro na SQL: ' . $sql    . ' Erro: ' .
                $conexao->error, E_USER_ERROR);
            }
            else {
                echo "Seu cadastro foi alterado com sucesso";
            }
            $conexao->close();
        }
        
      
       
    }
?>