<?php

class Pessoa
{
    public $id_pessoa;
    public $nome;
    public $email;
    public $cidade;
    public $telefone;
    public $login;
    public $senha;
    public $pagina;

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


    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }

    /**
     * @param mixed $id_pessoa
     */
    public function setIdPessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;
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

    public function cadastraPessoa()
    {
        include "../admin/class/conexao.php";

        $nome = $this->nome;
        $email = $this->email;
        $senha = md5($this->senha);
        $cidade = $this->cidade;
        $login = $this->login;
        $fone = $this->telefone;


        $sql = "INSERT INTO pessoa (ID_PESSOA, NOME, EMAIL, CIDADE, TELEFONE, LOGIN, SENHA) 
                VALUES ('', '$nome', '$email', '$cidade', '$fone', '$login', '$senha')";

        if ($query = $link->query($sql)) {

            if ($this->pagina == 'painel') {
                header('location:../pessoas.php?&operacaoCadastro=1');
                exit();
            } else {
                header('location:../login.php?&operacaoCadastro=1');
                exit();
            }
        } else {
            if ($this->pagina == 'painel') {
                header('location:../pessoas.php?&operacaoCadastro=2');
                exit();
            } else {
                header('location:../login.php?&operacaoCadastro=2');
                exit();
            }
        }

    }

    public function editaPessoa()
    {
        include "../admin/class/conexao.php";

        $nome = $this->nome;
        $email = $this->email;
        $cidade = $this->cidade;
        $fone = $this->telefone;
        $login = $this->login;
        $senha = md5($this->senha);

        $sql = "UPDATE pessoa SET 
        NOME = '$nome',
        EMAIL = '$email',
        CIDADE = '$cidade',
        LOGIN = '$login',
        SENHA = '$senha',
        TELEFONE = '$fone'
         WHERE ID_PESSOA = '$this->id_pessoa'";

        if ($query = $link->query($sql)) {
            header('location:../minha_conta.php?&operacaoCadastro=1');
            exit();
        }else{
            header('location:../minha_conta.php?&operacaoCadastro=2');
            exit();
        }
    }


    public function logaPessoa_user()
    {
        include "../admin/class/conexao.php";

        $senha = md5($this->senha);
        $login = $this->login;

        session_start();

        $sql = ("SELECT * FROM pessoa WHERE LOGIN = '$login' AND SENHA = '$senha' AND NIVEL = '1'");


        $confirmacao = $link->query($sql);
        $contagem = mysqli_num_rows($confirmacao);

        if ( $contagem == 1 ) {
            $dados = mysqli_fetch_assoc( $link->query($sql));
            $_SESSION['ID_PESSOA'] = $dados['ID_PESSOA'];
            $_SESSION['login_user'] = $login;
           header('location:../minhas_reservas.php');
        } else {
            unset ($_SESSION['login_user']);
            header('location:../login.php?error=true');
        }
    }

    public function buscaTodas()
    {
        include "../admin/class/conexao.php";


        $sql = 'SELECT * FROM pessoa';

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }
        return $dados;

    }

    public function buscaPessoaID()
    {

        include "conexao.php";

        $sql = "SELECT * FROM pessoa WHERE ID_PESSOA = '$this->id_pessoa'";

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }
        return $dados;
    }

    public function removePessoa($_id){

        include "../admin/class/conexao.php";


        $sql = "DELETE FROM pessoa where ID_PESSOA =  $_id  ";

        $result = $link->query($sql);

        var_dump($result);

        if($result == true){
            header('location:../pessoas.php?excluido=true');
        } else {
            header('location:../pessoas.php?excluido=false');
        }

    }

}

?>