<?php

include APPPATH . 'controllers\email\Email.php';
include APPPATH . 'controllers\GerenciadorDeEmails.php';

class Mail extends CI_Controller {

    private $gerenciadorDeEmails;
    private $idDoEmailDetalhado;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->gerenciadorDeEmails = new GerenciadorDeEmails();
    }

    public function index() {
        $this->salvarNovosEmailsNoBanco();

        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->load->view('header', $data);
        $this->load->view('email/mail');
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

    public function detalharEmail() {
        $this->idDoEmailDetalhado = $this->input->get('id', TRUE);
        $this->EmailModel->marcarComoLido($this->idDoEmailDetalhado);
        $this->configurarDadosParaExibirPaginaDeDetalhesDeEmail();
    }

    private function configurarDadosParaExibirPaginaDeDetalhesDeEmail() {
        $data['email'] = $this->EmailModel->obterPor($this->idDoEmailDetalhado);
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->renderizarParaPaginaDeDetalhesDoEmail($data);
    }

    public function excluirEmail() {
        $this->idDoEmailDetalhado = $this->input->get('idDoEmailNoServidor', TRUE);
        $this->EmailModel->excluir($this->idDoEmailDetalhado);
        $this->configurarDadosParaExibirPaginaDeDetalhesDeEmail();
    }

    private function renderizarParaPaginaDeDetalhesDoEmail($data) {
        $this->load->view('header', $data);
        $this->load->view('email/DetalhesEmail', $data);
        $this->load->view('footer');
    }

    public function enviar() {
        $this->idDoEmailDetalhado = $this->input->get('id', TRUE);
        $dadosDoEmail = $this->EmailModel->obterPor($this->idDoEmailDetalhado);
        $email = new Email;
        $email->emailRemetente = "jorge@nexxus.com.br";
        $email->assunto = $dadosDoEmail->assunto;
        $email->emailDestinatario = $dadosDoEmail->emailRemetente;
        $email->corpoDoEmail = quoted_printable_decode($this->input->post('corpoDoEmail'));

        $this->gerenciadorDeEmails->enviar($email);
        
        $this->configurarDadosParaExibirPaginaDeDetalhesDeEmail();
    }

}
