<?php

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->UsuarioModel->estaLogado();
    }

    public function index() {
        $data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();

        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footerAgenda');
    }
}
