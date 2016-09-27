<?php

include APPPATH . 'controllers/utils/DataUtils.php';
include APPPATH . 'controllers/GeraPDFServico.php';

class Tarefa extends CI_Controller {

    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->carregarConfiguracoesBasicas();
        $this->load->view('header', $this->data);
        $this->load->view('tarefa/index', $this->data);
        $this->load->view('footer');
    }

    public function inserirTarefa() {
        $this->data['descricao'] = $this->input->post('titulo');
        $this->data['data_ini'] = $this->DataUtils->alterarParaSeisDaManhaA($this->input->post('data_ini'));
        $this->data['data_fim'] = $this->DataUtils->alterarParaSeisDaManhaA($this->input->post('data_fim'));
        $this->data['status'] = $this->input->post('status');
        $this->data['id_cliente'] = $this->input->post('cliente');
        $this->data['cor'] = $this->input->post('cor');

        $this->TarefaModel->setTarefa($this->data);
    }

    public function alteraStatusDaTarefa() {
        $this->data['id'] = $this->input->post('id');
        $this->data['status'] = $this->input->post('status');
        $this->TarefaModel->updateTarefa($this->data);
    }

    public function excluir() {
        $id = $this->input->get('id', TRUE);
        $this->TarefaModel->excluir($id);
        $this->index();
    }
     
    private function carregarConfiguracoesBasicas(){
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['clientes'] = $this->ClienteModel->getClientes();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
    }
}