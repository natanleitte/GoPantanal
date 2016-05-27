<?php

   class TransporteTourModel extends CI_Model {

       public function __construct() {
           parent::__construct();
           $this->load->database();
       }

       public function setTransporteTour($data) {
           $this->load->database();
           $this->db->insert("transporte_tour", $data);
       }       
}
?>