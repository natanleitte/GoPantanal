<?php

include APPPATH . 'controllers\utils\DataUtils.php';

class Hotel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->load->model('ClienteModel');
        $this->load->model('UsuarioModel');
        $this->load->model('HotelModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();

        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $data['hoteis'] = $this->HotelModel->getHoteis();

        $this->load->view('header', $data);
        $this->load->view('hotel/index');
        $this->load->view('footer');
    }

    public function inserir() {
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $this->load->view('header', $data);
        $this->load->view('hotel/inserir');
        $this->load->view('footer');
    }

    public function inserirHotel() {
        $this->load->model("HotelModel");

        $data['nome'] = $this->input->post('nome');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['responsavel'] = $this->input->post('responsavel');
        $data['endereco'] = $this->input->post('endereco');
        $data['cidade'] = $this->input->post('cidade');

        $this->HotelModel->setHotel($data);
    }

}

?>