<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login/login');
    }

    public function logar() {
        $this->load->model('UsuarioModel', 'usuario');
        
        if ($this->usuario->existeOUsuarioESenhaInformadoNoFormulario()) {
            $data = array('username' => $this->input->post('login'), 'logged' => true);
            $this->session->set_userdata($data);
            redirect(base_url() . 'index.php/index');
        }
        redirect(base_url());
    }
    
    public function destruirSessao(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
