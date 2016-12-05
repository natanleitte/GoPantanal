<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class Hotel extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('HotelModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->configuracoesBasicasParaCarregarPagina();

        $this->load->view('header', $this->data);
        $this->load->view('hotel/index');
        $this->load->view('footer');
    }

    public function inserir() {
        $this->configuracoesBasicasParaCarregarPagina();

        $this->load->view('header', $this->data);
        $this->load->view('hotel/inserir');
        $this->load->view('footer');
    }

    public function inserirHotel() {
        $this->load->model("HotelModel");

        $this->data['nome'] = $this->input->post('nome');
        $this->data['telefone'] = $this->input->post('telefone');
        $this->data['email'] = $this->input->post('email');
        $this->data['responsavel'] = $this->input->post('responsavel');
        $this->data['endereco'] = $this->input->post('endereco');
        $this->data['cidade'] = $this->input->post('cidade');
        $this->data['conta'] = $this->input->post('conta');
        $this->data['agencia'] = $this->input->post('agencia');
        $this->data['banco'] = $this->input->post('banco');
        $this->data['titular_conta'] = $this->input->post('titular');

        $this->HotelModel->setHotel($this->data);
    }

    public function excluirHotel() {
        $id = $this->input->post('idHotel');
        $this->HotelModel->excluir($id);
    }

    private function configuracoesBasicasParaCarregarPagina() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $this->data['hoteis'] = $this->HotelModel->getHoteis();
    }

}
