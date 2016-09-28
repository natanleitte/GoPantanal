<?php

class Email {

    private $dataDeEnvio;
    private $assunto;
    private $nomeRemetente;
    private $emailRemetente;
    private $emailDestinatario;
    private $emailCC;
    private $responderPara;
    private $idDoEmailNoServidor;
    private $corpoDoEmail;
    private $foiLido;

    public function __get($name) {
        return $this->$name;
    }

    public
            function __set($name, $value) {
        $this->$name = $value;
    }

}
