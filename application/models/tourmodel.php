<?php

class TourModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getTours() {
        return $this->db->get("tour");
    }

    public function getTour($id) {
        $this->db->where('id', $id);
        return $this->db->get("tour");
    }

}
