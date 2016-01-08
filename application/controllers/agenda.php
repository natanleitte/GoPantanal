<?php

   class Agenda extends CI_Controller {

       public function __construct() {
           parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
           $this->load->helper('array');
       }

       public function index() {
           $this->load->model("TarefaModel");

           $data['tarefas'] = $this->TarefaModel->getTarefas();
           
//           foreach ($tarefas->result() as $row) {
//               $array_push
//           }

//           json_encode($tarefas);

           $this->load->view('header');
           $this->load->view('agenda/index');
           $this->load->view('footer', $data);
       }

   }

?>