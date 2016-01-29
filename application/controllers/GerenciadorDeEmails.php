<?php

include 'PhpImap\Mailbox.php';
include 'PhpImap\IncomingMail.php';
include APPPATH . 'controllers\email\Email.php';

class GerenciadorDeEmails extends CI_Controller {

    private $servidor = 'a2plcpnl0303.prod.iad2.secureserver.net';
    private $usuario = 'jorge@leafweb.com.br';
    private $senha = 'WolV@972';
    private $idsDosEmailsRecebidos;
    private $caixaDeEmails;

    public function __construct() {
        parent::__construct();
        $this->caixaDeEmails = new PhpImap\Mailbox('{' . $this->servidor . ':993/imap/ssl}INBOX', $this->usuario, $this->senha);
        $this->idsDosEmailsRecebidos = $this->caixaDeEmails->searchMailbox();
    }

    public function obterEmailPor($id) {
        return $this->caixaDeEmails->getMail($id);
    }

    public function marcarEmailComoLido($id) {
        $this->caixaDeEmails->markMailAsRead($id);
    }

    public function marcarEmailComoNaoLido($id) {
        $this->caixaDeEmails->markMailAsUnread($id);
    }

    public function obterNovosEmails() {
        $listaDeNovosEmails = array();
        foreach ($this->idsDosEmailsRecebidos as $id) {
            $emailRetornado = $this->obterEmailPor($id);
            $email = new Email;
            $email->dataDeEnvio = $emailRetornado->date;
            $email->assunto = $emailRetornado->subject;
            $email->nomeRemetente = $emailRetornado->fromName;
            $email->emailRemetente = $emailRetornado->fromAddress;
            $email->emailDestinatario = implode($emailRetornado->to);
            $email->emailCC = implode($emailRetornado->cc);
            $email->responderPara = implode($emailRetornado->replyTo);
            $email->idDoEmailNoServidor = $emailRetornado->id;
            $email->corpoDoEmail = quoted_printable_decode($this->caixaDeEmails->obterCorpoDoEmail($emailRetornado->id));
            $email->foiLido = FALSE;
            
            array_push($listaDeNovosEmails, $email);
            $this->caixaDeEmails->markMailAsRead($id);
        }
        return $listaDeNovosEmails;
    }

}
