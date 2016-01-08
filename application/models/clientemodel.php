<?php

class ClienteModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function setCliente($data) {
        $this->load->database();
        $this->db->insert("cliente", $data);
    }
}
