<?php

class Ginasio
{
    public $nome;
    public $email;
    public $cidade;
    public $telefone;
    public $login;
    public $senha;
    public $pagina;
    public $documento;
    public $id_ginasio;

    /**
     * @return mixed
     */
    public function getIdGinasio()
    {
        return $this->id_ginasio;
    }

    /**
     * @param mixed $id_ginasio
     */
    public function setIdGinasio($id_ginasio)
    {
        $this->id_ginasio = $id_ginasio;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getPagina()
    {
        return $this->pagina;
    }

    /**
     * @param mixed $pagina
     */
    public function setPagina($pagina)
    {
        $this->pagina = $pagina;
    }

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }


    public function cadastraGinasio()
    {
        include "conexao.php";

        $nome = $this->nome;
        $email = $this->email;
        $senha = $this->senha;
        $cidade = $this->cidade;
        $login = $this->login;
        $fone = $this->telefone;
        $documento = $this->documento;
        session_start();
        $id_prop = $_SESSION['ID_PESSOA_PROP'];

        $sql = "INSERT INTO ginasio (ID_GINASIO, NOME, EMAIL, CIDADE, TELEFONE, DOCUMENTO, ID_PROPRIETARIO) 
                VALUES ('', '$nome', '$email', '$cidade', '$fone', '$documento', '$id_prop')";

        if ($query = $link->query($sql)) {

            if ($this->pagina == 'painel') {
                header('location:../ginasios.php?&operacaoCadastro=1');
                exit();
            } else {
                header('location:../ginasios.php?&operacaoCadastro=1');
                exit();
            }
        } else {
            if ($this->pagina == 'painel') {
                header('location:../ginasios.php?&operacaoCadastro=2');
                exit();
            } else {
                header('location:../ginasios.php?&operacaoCadastro=2');
                exit();
            }
        }

    }

    public function editaGinasio()
    {
        include "conexao.php";

        $nome = $this->nome;
        $email = $this->email;
        $senha = $this->senha;
        $cidade = $this->cidade;
        $login = $this->login;
        $fone = $this->telefone;
        $documento = $this->documento;
        $id = $this->id_ginasio;


        $sql = "UPDATE ginasio SET 
        NOME = '$nome',
        EMAIL = '$email',
        CIDADE = '$cidade',
        TELEFONE = '$fone',
        DOCUMENTO = '$documento'
        WHERE ID_GINASIO = '$id'";


        if ($query = $link->query($sql)) {

            if ($this->pagina == 'painel') {
                header('location:../ginasios.php?&operacaoCadastro=1');
                exit();
            } else {
                header('location:../ginasios.php?&operacaoCadastro=1');
                exit();
            }
        } else {
            if ($this->pagina == 'painel') {
                header('location:../ginasios.php?&operacaoCadastro=2');
                exit();
            } else {
                header('location:../ginasios.php?&operacaoCadastro=2');
                exit();
            }
        }

    }

    public function buscaTodos($id)
    {

        include "conexao.php";

        $sql = "SELECT * FROM ginasio WHERE ID_PROPRIETARIO = '$id'";

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }
        return $dados;

    }


    public function buscaID()
    {

        include "conexao.php";

        $sql = "SELECT * FROM ginasio WHERE ID_GINASIO = '$this->id_ginasio'";

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }
        return $dados;

    }

    public function removeGinasio($_id){

        include "conexao.php";

        $sql = "DELETE FROM ginasio where ID_GINASIO =  $_id  ";

        $result = $link->query($sql);

        if($result == true){
            header('location:../ginasios.php?excluido=true');
        } else {
            header('location:../ginasios.php?excluido=false');
        }

    }

}

?>