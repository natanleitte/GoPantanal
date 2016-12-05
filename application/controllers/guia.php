<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class Guia extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('GuiaModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->configuracoesBasicasParaCarregarPagina();

        $this->load->view('header', $this->data);
        $this->load->view('guia/index');
        $this->load->view('footer');
    }

    public function inserir() {
        $this->configuracoesBasicasParaCarregarPagina();

        $this->load->view('header', $this->data);
        $this->load->view('guia/inserir');
        $this->load->view('footer');
    }

    public function inserirGuia() {
        $this->load->model("GuiaModel");

        $this->data['nome'] = $this->input->post('nome');
        $this->data['telefone'] = $this->input->post('telefone');
        $this->data['email'] = $this->input->post('email');
        $this->data['idioma'] = $this->input->post('idioma');
        $this->data['responsavel'] = $this->input->post('responsavel');
        $this->data['endereco'] = $this->input->post('endereco');
        $this->data['cidade'] = $this->input->post('cidade');

        $this->GuiaModel->setGuia($this->data);
    }

    public function excluirGuia() {
        $id = $this->input->post('idGuia');
        $this->GuiaModel->excluir($id);
    }

    private function configuracoesBasicasParaCarregarPagina() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $this->data['guias'] = $this->GuiaModel->getGuias();
    }

}

?>