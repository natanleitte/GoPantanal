<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class Guia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->load->model('ClienteModel');
        $this->load->model('UsuarioModel');
        $this->load->model('GuiaModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $data['guias'] = $this->GuiaModel->getGuias();

        $this->load->view('header', $data);
        $this->load->view('guia/index');
        $this->load->view('footer');
    }

    public function inserir() {
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $this->load->view('header', $data);
        $this->load->view('guia/inserir');
        $this->load->view('footer');
    }

    public function inserirGuia() {
        $this->load->model("GuiaModel");

        $data['nome'] = $this->input->post('nome');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['idioma'] = $this->input->post('idioma');
        $data['responsavel'] = $this->input->post('responsavel');
        $data['endereco'] = $this->input->post('endereco');
        $data['cidade'] = $this->input->post('cidade');

        $this->GuiaModel->setGuia($data);
    }

}

?>