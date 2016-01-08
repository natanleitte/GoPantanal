<?php

   class Cliente extends CI_Controller {

       public function __construct() {
           parent::__construct();
           $this->load->helper('url');
           $this->load->helper('form');
       }
       public function index()
       {
           $this->load->view('header');
           $this->load->view('cliente/index');
           $this->load->view('footer');
       }
       public function inserir() {
           $this->load->view('header');
           $this->load->view('cliente/inserir');
           $this->load->view('footer');
       }

       public function inserirCliente() {
           $this->load->model("ClienteModel");

           $data['nome'] = $this->input->post('nome');
           $data['telefone'] = $this->input->post('telefone');
           $data['email'] = $this->input->post('email');
           $data['endereco'] = $this->input->post('endereco');
           $data['passaporte'] = $this->input->post('passaporte');

           $this->ClienteModel->setCliente($data);

//           header('Location:' . base_url() . 'index.php/cliente/inserir');
       }

   }
   