<?php

   class Index extends CI_Controller {

       public function __construct() {
           parent::__construct();
           $this->load->helper('url');
           $this->load->model('TarefaModel');
       }

       public function index() {
           $data['tarefas'] = $this->TarefaModel->getTarefas();

           $this->load->view('header', $data);
           $this->load->view('index');
           $this->load->view('footer');
       }

   }
   