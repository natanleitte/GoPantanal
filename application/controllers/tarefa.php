<?php

   class Tarefa extends CI_Controller {

       public function __construct() {
           parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
       }

       public function index() {

           $this->load->model('TarefaModel');

           $data['tarefas'] = $this->TarefaModel->getTarefas();

           $this->load->view('header', $data);
           $this->load->view('tarefa/index', $data);
           $this->load->view('footer');
       }

       public function formataData($data) {
//           //Wed Jan 27 2016 00:00:00 GMT+0000
           $mes = substr($data, 4, 3);

           if (strcmp($mes, "Jan") == 0)
               $mes = "01";
           else if (strcmp($mes, "Feb") == 0)
               $mes = "02";
           else if (strcmp($mes, "Mar") == 0)
               $mes = "03";
           else if (strcmp($mes, "Apr") == 0)
               $mes = "04";
           else if (strcmp($mes, "May") == 0)
               $mes = "05";
           else if (strcmp($mes, "Jun") == 0)
               $mes = "06";
           else if (strcmp($mes, "Jul") == 0)
               $mes = "07";
           else if (strcmp($mes, "Ago") == 0)
               $mes = "08";
           else if (strcmp($mes, "Sep") == 0)
               $mes = "09";
           else if (strcmp($mes, "Out") == 0)
               $mes = "10";
           else if (strcmp($mes, "Nov") == 0)
               $mes = "11";
           else if (strcmp($mes, "Dez") == 0)
               $mes = "12";

           $dia = substr($data, 8, 2);
           $ano = substr($data, 11, 4);

           $data = $ano . "-" . $mes . "-" . $dia;
           return $data;
       }

       public function inserirTarefa() {
           $this->load->model("TarefaModel");

           $data['titulo'] = $this->input->post('titulo');
           $data_ini = $this->input->post('data_ini');
           $data_fim = $this->input->post('data_fim');

           $data['data_ini'] = $this->input->post('data_ini');
           $data['data_fim'] = $this->input->post('data_fim');
           $data['status'] = $this->input->post('status');

           $this->TarefaModel->setTarefa($data);
       }

       public function alteraStatusDaTarefa() {

           $this->load->model("TarefaModel");

           $data['id'] = $this->input->post('id');
           $data['status'] = $this->input->post('status');

           $this->TarefaModel->updateTarefa($data, $this->input->post('id'));
       }

   }

?>