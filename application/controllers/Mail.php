<?php

include APPPATH . 'controllers/email/Email.php';
include APPPATH . 'controllers/GerenciadorDeEmails.php';

class Mail extends CI_Controller {

    private $gerenciadorDeEmails;
    private $idDoEmailDetalhado;
    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->UsuarioModel->estaLogado();
        $this->gerenciadorDeEmails = new GerenciadorDeEmails();
    }

    public function index() {
        $this->salvarNovosEmailsNoBanco();
        $this->configurarDadosParaExibirPaginaDeDetalhesDeEmail();

        $this->load->view('header', $this->data);
        $this->load->view('email/mail');
        $this->load->view('footer');
    }

    private function salvarNovosEmailsNoBanco() {
        $listaDeEmails = $this->gerenciadorDeEmails->obterNovosEmails();
        foreach ($listaDeEmails as $email) {
            $this->data['dataDeEnvio'] = $email->dataDeEnvio;
            $this->data['assunto'] = $email->assunto;
            $this->data['nomeRemetente'] = $email->nomeRemetente;
            $this->data['emailRemetente'] = $email->emailRemetente;
            $this->data['emailDestinatario'] = $email->emailDestinatario;
            $this->data['emailCC'] = $email->emailCC;
            $this->data['responderPara'] = $email->responderPara;
            $this->data['idDoEmailNoServidor'] = $email->idDoEmailNoServidor;
            $this->data['corpoDoEmail'] = $email->corpoDoEmail;
            $this->data['foiLido'] = $email->foiLido;

            $this->EmailModel->incluirEmail($this->data);
        }
    }

    public function detalharEmail() {
        $this->idDoEmailDetalhado = $this->input->get('id', TRUE);
        $this->EmailModel->marcarComoLido($this->idDoEmailDetalhado);

        $this->data['statusEnvio'] = "";
        $this->configurarDadosParaExibirPaginaDeDetalhesDeEmail();
        $this->renderizarParaPaginaDeDetalhesDoEmail();
    }

    private function configurarDadosParaExibirPaginaDeDetalhesDeEmail() {
        $this->data['email'] = $this->EmailModel->obterPor($this->idDoEmailDetalhado);
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
    }

    public function excluirEmail() {
        $this->idDoEmailDetalhado = $this->input->get('id', TRUE);
        $this->EmailModel->excluir($this->idDoEmailDetalhado);
        $this->data['statusEnvio'] = "";
        $this->index();
    }

    private function renderizarParaPaginaDeDetalhesDoEmail() {
        $this->load->view('header', $this->data);
        $this->load->view('email/DetalharEmail', $this->data);
        $this->load->view('footer');
    }

    public function enviar() {
        $this->idDoEmailDetalhado = $this->input->get('id', TRUE);
        $dadosDoEmail = $this->EmailModel->obterPor($this->idDoEmailDetalhado);
        $email = new Email;
        $email->emailRemetente = "no-reply@gopantanal.com.br";
        $email->assunto = "[GoPantanal] Resposta - " . $dadosDoEmail->assunto;
        $email->emailDestinatario = $dadosDoEmail->emailRemetente;
        $email->corpoDoEmail = $this->input->post('corpoDoEmail');

        $this->data['statusEnvio'] = $this->configurarEDisparar($email) ? 1 : 0;

        $this->configurarDadosParaExibirPaginaDeDetalhesDeEmail();
        $this->renderizarParaPaginaDeDetalhesDoEmail();
    }

    public function configurarEDisparar($email) {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://a2plcpnl0303.prod.iad2.secureserver.net',
            'smtp_port' => 465,
            'smtp_user' => 'jorge@leafweb.com.br',
            'smtp_pass' => 'WolV@972',
            'mailtype' => 'html',
            'charset' => 'utf-8',
        );
        $this->load->library('email');
        $this->email->initialize($config);

        $configDoArquivo = array(
            'upload_path' => 'assets/uploads/',
            'allowed_types' => 'gif|jpg|png|pdf|doc|xls|xlsx|docx',
            'max_size' => '1000'
        );
        $this->load->library('upload', $configDoArquivo);
        $this->email->initialize($configDoArquivo);

        $this->email->set_newline("\r\n");
        $this->email->from($email->emailRemetente);
        $this->email->to($email->emailDestinatario);
        $this->email->subject($email->assunto);
        $this->email->message($email->corpoDoEmail);

        if ($this->upload->do_upload('userfile')) {
            $attachdata = $this->upload->data();
            $this->email->attach($attachdata['full_path']);
        }

        $this->email->send();
        echo $this->email->print_debugger();
        exit();
    }
}
