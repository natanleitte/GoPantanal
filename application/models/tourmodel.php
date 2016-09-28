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
        $this->load->database();
        $this->db->where('id', $id);
        $query = $this->db->get("tour");
        
        foreach($query->result() as $item)
        {
            return $item;
        }
    }
    
    public function setTour($data) {
           $this->load->database();
           $this->db->insert("tour", $data);
       }

}
