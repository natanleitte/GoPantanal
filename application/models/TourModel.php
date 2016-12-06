<?php

class TourModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function inserir($data) {
        $this->db->insert("tour", $data);
    }

    public function obterIdPeloCliente($idCliente){
        $this->db->where('id_cliente', $idCliente);
        return $this->db->get("tour")->row('id');
    }
}