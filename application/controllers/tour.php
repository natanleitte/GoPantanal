<?php

class Tour extends CI_Controller {

    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('TarefaModel');
        $this->load->model('TourModel');
        $this->load->model('ClienteModel');
        $this->load->model('HotelModel');
    }

    public function index() {
        $this->data['tour'] = $this->TourModel->getTour($this->input->get('id'), TRUE);
        $this->data['cliente'] = $this->ClienteModel->getCliente($this->data['tour']->id_cliente);

        $this->load->view('header', $this->data);
        $this->load->view('cliente/tour', $this->data);
        $this->load->view('footer');
    }

    public function tour() {
        $this->configuracoesBasicasParaCarregarPagina();
        $this->data['cliente'] = $this->ClienteModel->getCliente($this->input->get('id', TRUE));
        $this->data['tour'] = $this->input->get('id', TRUE);
        
        $this->load->view('header', $this->data);
        $this->load->view('tour/tour', $this->data);
        $this->load->view('footer');
    }

    private function configuracoesBasicasParaCarregarPagina() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['clientes'] = $this->ClienteModel->getClientesPorDataDesc();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $this->data['hoteis'] = $this->HotelModel->getHoteis();
    }
}