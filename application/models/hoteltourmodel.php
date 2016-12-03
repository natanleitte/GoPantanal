<?php

   class HotelTourModel extends CI_Model {
       private $nomeDaTabela = 'hotel_tour';
       public function __construct() {
           parent::__construct();
           $this->load->database();
       }

       public function setHotelTour($data) {
           $this->load->database();
           $this->db->insert($this->nomeDaTabela, $data);
       }
       
       public function getHoteis(){
           $this->db->from($this->nomeDaTabela);
           $this->db->join("hotel", "hotel.id = " . $this->nomeDaTabela . ".id_hotel");
           return $this->db->get();
       }
}
?>