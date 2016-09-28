<?php

   class TransporteModel extends CI_Model {

       public function __construct() {
           parent::__construct();
           $this->load->database();
       }

       public function setTransporte($data) {
           $this->load->database();
           $this->db->insert("transporte", $data);
       }
       
       public function getTransportes() {
        $this->load->database();
        return $this->db->get("transporte");
    }

}
?>