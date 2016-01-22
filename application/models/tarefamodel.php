<?php

   class TarefaModel extends CI_Model {

       public function __construct() {
           parent::__construct();
           $this->load->database();
       }

       public function setTarefa($data) {
           $this->load->database();
           $this->db->insert("tarefa", $data);
       }

       public function getTarefas() {
           $this->load->database();

           return $this->db->get("tarefa");
       }

       public function updateTarefa($data, $id) {
           $this->db->where("id", $id);
           $this->db->update("tarefa", $data);
       }

   }

?>