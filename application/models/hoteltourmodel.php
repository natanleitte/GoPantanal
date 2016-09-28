<?php

   class HotelTourModel extends CI_Model {

       public function __construct() {
           parent::__construct();
           $this->load->database();
       }

       public function setHotelTour($data) {
           $this->load->database();
           $this->db->insert("hotel_tour", $data);
       }       
}
?>