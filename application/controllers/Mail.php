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
        $this->UsuarioModel->estaLogado();
        
        $this->gerenciadorDeEmails = new GerenciadorDeEmails();
    }

    public function index() {
        $this->salvarNovosEmailsNoBanco();

        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
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
        $this->load->view('email/DetalharEmail', $data);
        $this->load->view('footer');
    }

    public function enviar() {
        $this->idDoEmailDetalhado = $this->input->get('id', TRUE);
        $dadosDoEmail = $this->EmailModel->obterPor($this->idDoEmailDetalhado);
        $email = new Email;
        $email->emailRemetente = "no-reply@gopantanal.com.br";
        $email->assunto = "[GoPantanal] Resposta - " . $dadosDoEmail->assunto;
        $email->emailDestinatario = $dadosDoEmail->emailRemetente;
        $email->corpoDoEmail = quoted_printable_decode($this->input->post('corpoDoEmail'));

        $this->configurarEDisparar($email);

        $this->configurarDadosParaExibirPaginaDeDetalhesDeEmail();
    }
    
    public function configurarEDisparar($email) {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://a2plcpnl0303.prod.iad2.secureserver.net',
            'smtp_port' => 465,
            'smtp_user' => 'jorge@leafweb.com.br',
            'smtp_pass' => 'WolV@972',
            'mailtype' => 'html',
            'charset' => 'utf-8'
        );
        
        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $this->email->initialize($config);

        $this->email->from($email->emailRemetente);
        $this->email->to($email->emailDestinatario);
        $this->email->subject($email->assunto);
        $this->email->message($email->corpoDoEmail);
        $this->email->send();
        echo $this->email->print_debugger();
    }

}
