<?php

   class Tarefa extends CI_Controller {

       public function __construct() {
           parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
       }

       public function formataData($data) {
           $mesesDoAno = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec");
           
           $mes = substr($data, 4, 3);
           
           for($i = 0; $i < count($mesesDoAno); $i++){
               if (strcmp($mes, $mesesDoAno[$i]) == 0) {
                $mes = "'" . ($i + 1) . "'";
               }
           }
           
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

           $this->TarefaModel->setTarefa($data);
       }

   }

?>