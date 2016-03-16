<?php

   class ClienteModel extends CI_Model {

       public function __construct() {
           parent::__construct();
           $this->load->database();
       }

       public function setCliente($data) {
           $this->load->database();
           $this->db->insert("cliente", $data);
       }

       public function getClientes() {
           $this->load->database();
           return $this->db->get("cliente");
       }

       public function getCliente($id) {
           $this->db->where('id', $id);
           return $this->db->get("cliente");
       }
       
       public function getClientesPorDataDesc() {
           $this->load->database();
           $this->db->order_by("data_insercao", "desc"); 
           return $this->db->get("cliente");
       }
       
        public function updateCliente($data, $id) {
           $this->db->where("id", $id);
           $this->db->update("cliente", $data);
       }
       
       public function getClientePorNome($query) {
           $this->db->like('nome', $query);
           return $this->db->get("cliente");
       }
   }
   