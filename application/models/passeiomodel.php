<?php

class PasseioModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function setPasseio($data) {
        $this->load->database();
        $this->db->insert("passeio", $data);
    }

    public function getPasseios() {
        return $this->db->get("passeio");
    }

    public function excluir($id) {
        $this->db->where("id", $id);
        echo $this->db->delete("passeio");
    }

}