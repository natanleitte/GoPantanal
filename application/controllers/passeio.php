<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class Passeio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->load->model('ClienteModel');
        $this->load->model('UsuarioModel');
        $this->load->model('PasseioModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $data['passeios'] = $this->PasseioModel->getPasseios();

        $this->load->view('header', $data);
        $this->load->view('passeio/index');
        $this->load->view('footer');
    }

    public function inserir() {
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $this->load->view('header', $data);
        $this->load->view('passeio/inserir');
        $this->load->view('footer');
    }

    public function inserirPasseio() {
        $this->load->model("PasseioModel");

        $data['nome'] = $this->input->post('nome');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['responsavel'] = $this->input->post('responsavel');
        $data['endereco'] = $this->input->post('endereco');
        $data['cidade'] = $this->input->post('cidade');

        $this->PasseioModel->setPasseio($data);
    }

}

?>