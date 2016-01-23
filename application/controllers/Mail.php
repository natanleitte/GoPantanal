<?php

include APPPATH . 'controllers\GerenciadorDeEmails.php';

class Mail extends CI_Controller {

    private $gerenciadorDeEmails;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->gerenciadorDeEmails = new GerenciadorDeEmails();
    }

    public function index() {
        $this->salvarNovosEmailsNoBanco();
        
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();

        $this->load->view('header', $data);
        $this->load->view('mail');
        $this->load->view('footer');
    }

    private function salvarNovosEmailsNoBanco() {
        $listaDeEmails = $this->gerenciadorDeEmails->obterNovosEmails();

        foreach ($listaDeEmails as $email) {
            $data['dataDeEnvio'] = $email->dataDeEnvio;
            $data['assunto'] = $email->assunto;
            $data['nomeRemetente'] = $email->nomeRemetente;
            $data['emailRemetente'] = $email->emailRemetente;
            $data['emailDestinatario'] = $email->emailDestinatario;
            $data['emailCC'] = $email->emailCC;
            $data['responderPara'] = $email->responderPara;
            $data['idDoEmailNoServidor'] = $email->idDoEmailNoServidor;
            $data['corpoDoEmail'] = $email->corpoDoEmail;
            $data['foiLido'] = $email->foiLido;

            $this->EmailModel->incluirEmail($data);
        }
    }

}
