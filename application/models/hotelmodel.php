<?php

class HotelModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function setHotel($data) {
        $this->load->database();
        $this->db->insert("hotel", $data);
    }

    public function getHoteis() {
        return $this->db->get("hotel");
    }
    
    public function getPorId($id){
        $this->db->where("id", $id);
        return $this->db->get("hotel")->row();
    }
    
    public function excluir($id) {
        $this->db->where("id", $id);
        echo $this->db->delete("hotel");
    }
}