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

}
?>