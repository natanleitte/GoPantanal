<?php

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->load->model('UsuarioModel');
        $this->UsuarioModel->estaLogado();
    }

    public function index() {
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();

        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }

}
