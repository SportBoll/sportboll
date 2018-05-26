<?php

class Reserva
{
    public $idreserva;
    public $idpessoa;
    public $idquadra;
    public $data;
    public $status_pag;
    public $status_reserva;
    public $inicio;
    public $fim;
    public $datareserva;

    /**
     * @return mixed
     */
    public function getIdreserva()
    {
        return $this->idreserva;
    }

    /**
     * @param mixed $idreserva
     */
    public function setIdreserva($idreserva)
    {
        $this->idreserva = $idreserva;
    }

    /**
     * @return mixed
     */
    public function getIdpessoa()
    {
        return $this->idpessoa;
    }

    /**
     * @param mixed $idpessoa
     */
    public function setIdpessoa($idpessoa)
    {
        $this->idpessoa = $idpessoa;
    }

    /**
     * @return mixed
     */
    public function getIdquadra()
    {
        return $this->idquadra;
    }

    /**
     * @param mixed $idquadra
     */
    public function setIdquadra($idquadra)
    {
        $this->idquadra = $idquadra;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getStatusPag()
    {
        return $this->status_pag;
    }

    /**
     * @param mixed $status_pag
     */
    public function setStatusPag($status_pag)
    {
        $this->status_pag = $status_pag;
    }

    /**
     * @return mixed
     */
    public function getStatusReserva()
    {
        return $this->status_reserva;
    }

    /**
     * @param mixed $status_reserva
     */
    public function setStatusReserva($status_reserva)
    {
        $this->status_reserva = $status_reserva;
    }

    /**
     * @return mixed
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * @param mixed $inicio
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }

    /**
     * @return mixed
     */
    public function getFim()
    {
        return $this->fim;
    }

    /**
     * @param mixed $fim
     */
    public function setFim($fim)
    {
        $this->fim = $fim;
    }

    /**
     * @return mixed
     */
    public function getDatareserva()
    {
        return $this->datareserva;
    }

    /**
     * @param mixed $datareserva
     */
    public function setDatareserva($datareserva)
    {
        $this->datareserva = $datareserva;
    }


    public function cadastraReserva()
    {
        include "conexao.php";


        $sql = "INSERT INTO reserva (ID_RESERVA, ID_PESSOA, ID_QUADRA, DATA, STATUS_PAG, STATUS_RESERVA, INICIO, FIM, DATA_RESERVADA) 
                VALUES ('', $this->idpessoa, $this->idquadra, $this->data, '$this->status_pag', '$this->status_reserva', $this->inicio, $this->fim, $this->datareserva)";

        if ($query = $link->query($sql)) {
            header('location:../../../minhas_reservas.php?&operacaoCadastro=1');

            //envia email


//error_reporting(E_ALL);
            error_reporting(E_STRICT);

            date_default_timezone_set('America/Brazilia');

            require_once('../../PHPMailer/class.phpmailer.php');
            include("../../PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
            $mail             = new PHPMailer();

            $mail->IsSMTP();

            $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
            $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
            $mail->Username   = "sportboll3@gmail.com";  // GMAIL username
            $mail->Password   = "159951acb";            // GMAIL password

            $mail->SetFrom('sportboll3@gmail.com', 'SportBoll - Reservas');

            $mail->Subject    = "SportBoll - Reservas";

            $mail->MsgHTML('gfffffffffffffffffffffffffd');

            $address = "sportboll3@gmail.com";

            $mail->AddAddress($address, "SportBoll - Reservas");


            if(!$mail->Send()) {
//    echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
//    echo "Message sent!";
            }

            //envia email


            exit();
        } else {
            header('location:../../../minhas_reservas.php?&operacaoCadastro=2');
            exit();
        }
    }

    public function buscaTodosID()
    {

        include "conexao.php";

        $sql = "SELECT * FROM reserva INNER JOIN quadra on quadra.ID_QUADRA = reserva.ID_QUADRA INNER JOIN ginasio on ginasio.ID_GINASIO = quadra.ID_GINASIO WHERE id_pessoa = '$this->idpessoa'";

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }
        return $dados;

    }


    public function buscaTodos()
    {

        include "conexao.php";

        $sql = "SELECT * FROM reserva INNER JOIN quadra on quadra.ID_QUADRA = reserva.ID_QUADRA INNER JOIN ginasio on ginasio.ID_GINASIO = quadra.ID_GINASIO";

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }
        return $dados;

    }

    public function BuscaIDReserva()
    {

        include "conexao.php";

        $sql = "SELECT * FROM reserva INNER JOIN quadra on quadra.ID_QUADRA = reserva.ID_QUADRA INNER JOIN pessoa on pessoa.ID_PESSOA = reserva.ID_PESSOA WHERE ID_RESERVA = '$this->idreserva'";

        $result = $link->query($sql);

        $dados = [];

        while ($fetch = $result->fetch_assoc()) {
            array_push($dados, $fetch);
        }
        return $dados;

    }





}
?>