<?php

class Tour extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->load->model('TourModel');
    }

    public function index() {
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();

        $data['tour'] = $this->TourModel->getTour($this->input->get('id'));
        $data['cliente'] = $this->ClienteModel->getCliente($data[tour]->id_cliente);

        $this->load->view('header', $data);
        $this->load->view('cliente/tour', $data);
        $this->load->view('footer');
    }

}
