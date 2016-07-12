<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class Passeio extends CI_Controller {

    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('PasseioModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->configuracoesBasicasParaCarregarPagina();

        $this->load->view('header', $this->data);
        $this->load->view('passeio/index');
        $this->load->view('footer');
    }

    public function inserir() {
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $this->load->view('header', $this->data);
        $this->load->view('passeio/inserir');
        $this->load->view('footer');
    }

    public function inserirPasseio() {
        $this->load->model("PasseioModel");

        $this->data['nome'] = $this->input->post('nome');
        $this->data['telefone'] = $this->input->post('telefone');
        $this->data['email'] = $this->input->post('email');
        $this->data['responsavel'] = $this->input->post('responsavel');
        $this->data['endereco'] = $this->input->post('endereco');
        $this->data['cidade'] = $this->input->post('cidade');

        $this->PasseioModel->setPasseio($this->data);
    }

    private function configuracoesBasicasParaCarregarPagina() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $this->data['passeios'] = $this->PasseioModel->getPasseios();
    }
}
?>