<?php
include APPPATH . 'controllers/GerenciadorDeEmails.php';

class Index extends CI_Controller {

    private $gerenciadorDeEmails;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->UsuarioModel->estaLogado();
        $this->gerenciadorDeEmails = new GerenciadorDeEmails();
    }

    public function index() {
        $this->salvarNovosEmailsNoBanco();
        
        $data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();

        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footerAgenda');
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
