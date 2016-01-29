<?php

   class Agenda extends CI_Controller {

       public function __construct() {
           parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
           $this->load->helper('array');
           $this->load->model("TarefaModel");
           $this->load->model("EmailModel");
       }

       public function index() {
            $data['tarefas'] = $this->TarefaModel->getTarefas();
            $data['emails'] = $this->EmailModel->obterTodos();
            $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();

           $this->load->view('header', $data);
           $this->load->view('agenda/index');
           $this->load->view('footerAgenda', $data);
       }

   }

?>