<?php

class Tour extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->load->model('TourModel');
        $this->load->model('ClienteModel');
    }

    public function index() {
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();

        $data['tour'] = $this->TourModel->getTour($this->input->get('id'));
        echo $data['tour']->id_cliente;
        $data['cliente'] = $this->ClienteModel->getCliente($data['tour']->id_cliente);

        $this->load->view('header', $data);
        $this->load->view('cliente/tour', $data);
        $this->load->view('footer');
    }

    public function tour() {
        $this->configuracoesBasicasParaCarregarPagina();

        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $data['cliente'] = $this->ClienteModel->getCliente($this->input->get('id', TRUE));


//        $data['tour'] = $this->TourModel->getTour($this->input->get('id'));
//        echo $data['tour']->id_cliente;
//        $data['cliente'] = $this->ClienteModel->getCliente($data['tour']->id_cliente);

        $this->load->view('header', $data);
        $this->load->view('tour/tour', $data);
        $this->load->view('footer');
    }

    private function configuracoesBasicasParaCarregarPagina() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['clientes'] = $this->ClienteModel->getClientesPorDataDesc();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
    }

}
