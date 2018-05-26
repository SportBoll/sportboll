<?php

class Quadra
{
    public $idGinasio;
    public $descricao;
    public $tipo;
    public $horario;
    public $idQuadra;

    /**
     * @return mixed
     */
    public function getIdQuadra()
    {
        return $this->idQuadra;
    }

    /**
     * @param mixed $idQuadra
     */
    public function setIdQuadra($idQuadra)
    {
        $this->idQuadra = $idQuadra;
    }

    /**
     * @return mixed
     */
    public function getIdGinasio()
    {
        return $this->idGinasio;
    }

    /**
     * @param mixed $id_ginasio
     */
    public function setIdGinasio($id_ginasio)
    {
        $this->idGinasio = $id_ginasio;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * @param mixed $horario
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }


    public function cadastraGinasio()
    {
        include "conexao.php";

        $id_ginasio = $this->idGinasio;
        $descricao = $this->descricao;
        $tipo = $this->tipo;
        $horario = $this->horario;



        $sql = "INSERT INTO quadra (ID_QUADRA, ID_GINASIO, DESCRICAO, TIPO, VALOR) 
                VALUES ('', $id_ginasio, '$descricao', '$tipo', '$horario')";

        if ($query = $link->query($sql)) {

            if ($this->pagina == 'painel') {
                header('location:../quadras.php?&operacaoCadastro=1');
                exit();
            } else {
                header('location:../quadras.php?&operacaoCadastro=1');
                exit();
            }
        } else {

            echo $sql;
            if ($this->pagina == 'painel') {
                header('location:../quadras.php?&operacaoCadastro=2');
                exit();
            } else {
                header('location:../quadras.php?&operacaoCadastro=2');
                exit();
            }
        }
    }

    public function editarQuadra()
    {
        include "conexao.php";

        $id_quadra = $this->idQuadra;
        $id_ginasio = $this->idGinasio;
        $descricao = $this->descricao;
        $tipo = $this->tipo;
        $horario = $this->horario;

        $sql = "UPDATE quadra SET
        ID_GINASIO = '$id_ginasio',
        DESCRICAO = '$descricao',
        TIPO = '$tipo',
        VALOR = '$horario'
        WHERE ID_QUADRA = '$id_quadra'
        ";

        if ($query = $link->query($sql)) {

            if ($this->pagina == 'painel') {
                header('location:../quadras.php?&operacaoCadastro=1');
                exit();
            } else {
                header('location:../quadras.php?&operacaoCadastro=1');
                exit();
            }
        } else {

            echo $sql;
            if ($this->pagina == 'painel') {
                header('location:../quadras.php?&operacaoCadastro=2');
                exit();
            } else {
                header('location:../quadras.php?&operacaoCadastro=2');
                exit();
            }
        }
    }

    public function buscaTodos($id_proprietario)
    {

        include "conexao.php";

        $sql = "SELECT * FROM quadra INNER JOIN ginasio on ginasio.ID_GINASIO = quadra.ID_GINASIO WHERE ginasio.ID_PROPRIETARIO = '$id_proprietario'";

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }
        return $dados;

    }

    public function buscaID($_id)
    {

        include "conexao.php";

        $sql = "SELECT * FROM quadra INNER JOIN ginasio on ginasio.ID_GINASIO = quadra.ID_GINASIO WHERE ID_QUADRA = $_id";

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }
        return $dados;

    }

    public function removeQuadra($_id){

        include "conexao.php";

        $sql = "DELETE FROM quadra where ID_QUADRA =  $_id  ";

        $result = $link->query($sql);

        if($result == true){
            header('location:../quadras.php?excluido=true');
        } else {
            header('location:../quadras.php?excluido=false');
        }

    }

    public function verificaDisponibilidadeHorario($_id, $_data1, $_data2){

        include "conexao.php";

        $_data1 = str_split($_data1, 11)[1];
        $_data2 = str_split($_data2, 11)[1];

        $sql = "Select * from reserva Where reserva.DATA = '2018-04-24' and reserva.INICIO = '$_data1:00' OR reserva.FIM = '$_data2:00'";

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }

       return $dados;

    }

}

?>