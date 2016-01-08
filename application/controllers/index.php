<?php

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->model('tarefamodel', 'tarefa', TRUE);
        
        $data['tarefas'] = $this->tarefa->getTarefas();
        
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer', $data);
    }
}
