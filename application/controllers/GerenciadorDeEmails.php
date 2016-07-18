<?php

include 'PhpImap/Mailbox.php';
include 'PhpImap/IncomingMail.php';

class GerenciadorDeEmails {

    private $servidor = 'imap.gmail.com';
    private $usuario = 'infogopantanal@gmail.com';
    private $senha = '123GoPantanal';
    private $idsDosEmailsRecebidos;
    private $caixaDeEmails;

    public function __construct() {
        $this->caixaDeEmails = new PhpImap\Mailbox('{' . $this->servidor . ':993/imap/ssl/novalidate-cert}INBOX', $this->usuario, $this->senha);
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