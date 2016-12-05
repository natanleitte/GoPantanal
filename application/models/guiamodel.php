<?php

class GuiaModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function setGuia($data) {
        $this->load->database();
        $this->db->insert("guia", $data);
    }

    public function getGuias() {
        return $this->db->get("guia");
    }

    public function excluir($id) {
        $this->db->where("id", $id);
        echo $this->db->delete("guia");
    }

}
