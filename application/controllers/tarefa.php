<?php

include APPPATH . 'controllers\utils\DataUtils.php';

class Tarefa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $data['clientes'] = $this->ClienteModel->getClientes();

        $this->load->view('header', $data);
        $this->load->view('tarefa/index', $data);
        $this->load->view('footer');
    }

    public function inserirTarefa() {
        $data['titulo'] = $this->input->post('titulo');
        $data['data_ini'] = $this->DataUtils->alterarParaSeisDaManhaA($this->input->post('data_ini'));
        $data['data_fim'] = $this->DataUtils->alterarParaSeisDaManhaA($this->input->post('data_fim'));
        $data['status'] = $this->input->post('status');
        $data['id_cliente'] = $this->input->post('cliente');
        $data['cor'] = $this->input->post('cor');

        $this->TarefaModel->setTarefa($data);
    }

    public function alteraStatusDaTarefa() {
        $data['id'] = $this->input->post('id');
        $data['status'] = $this->input->post('status');
        $this->TarefaModel->updateTarefa($data);
    }

    public function excluir() {
        $id = $this->input->get('id', TRUE);
        $this->TarefaModel->excluir($id);
        $this->index();
    }

}
