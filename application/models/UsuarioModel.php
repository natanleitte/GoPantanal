<?php

class UsuarioModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function existeOUsuarioESenhaInformadoNoFormulario() {
        $this->db->where('login', $this->input->post('login'));
        $this->db->where('senha', $this->input->post('senha'));
        $this->db->where('status', 1);

        $query = $this->db->get('usuario');
        
        return $query->num_rows() === 1 ? true : false;
    }

    public function estaLogado() {
        $logged = $this->session->userdata('logged');
        if (!isset($logged) || $logged != true) {
            redirect(base_url());
        }
    }
}
