<?php

class EmailModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function incluirEmail($data) {
        $this->db->insert('email', $data);
    }

    public function obterTodos() {
        return $this->db->get('email')->result();
    }

    public function obterPor($id) {
        $this->db->where('idDoEmailNoServidor', $id);
        return $this->db->get("email")->row();
    }

    public function excluir($id) {
        $this->db->where('idDoEmailNoServidor', $id);
        $this->db->delete('email');
    }

    public function marcarComoLido($id) {
        $this->db->where('idDoEmailNoServidor', $id);
        $data = $this->db->get("email")->row_array();
        $data['foiLido'] = TRUE;
        $this->db->where('id', $id);
        $this->db->replace('email', $data);
    }

    public function obterQuantidadeDeEmailsNaoLidos(){
        $this->db->where('foiLIdo', false);
        return $this->db->get('email')->num_rows();
    }
    
    public function obterOsUltimosCincoEmails(){
        $this->db->limit(5);
        return $this->db->get('email')->result();
    }
}
