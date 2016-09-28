<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class Transporte extends CI_Controller {

    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('UsuarioModel');
        $this->load->model('TransporteModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->configuracoesBasicasParaCarregarAPagina();

        $this->load->view('header', $this->data);
        $this->load->view('transporte/index');
        $this->load->view('footer');
    }

    public function inserir() {
        $this->configuracoesBasicasParaCarregarAPagina();

        $this->load->view('header', $this->data);
        $this->load->view('transporte/inserir');
        $this->load->view('footer');
    }

    public function inserirTransporte() {
        $this->load->model("TransporteModel");

        $this->data['nome'] = $this->input->post('nome');
        $this->data['telefone'] = $this->input->post('telefone');
        $this->data['email'] = $this->input->post('email');
        $this->data['responsavel'] = $this->input->post('responsavel');
        $this->data['endereco'] = $this->input->post('endereco');
        $this->data['cidade'] = $this->input->post('cidade');

        $this->TransporteModel->setTransporte($this->data);
    }

    private function configuracoesBasicasParaCarregarAPagina() {
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['transportes'] = $this->TransporteModel->getTransportes();
    }
}
?>