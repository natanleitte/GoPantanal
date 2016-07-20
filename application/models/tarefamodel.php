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
        $this->db->select('tarefa.*, cliente.nome');
        $this->db->join('cliente', 'cliente.id = tarefa.id_cliente');
        return $this->db->get("tarefa");
    }

    public function updateTarefa($data) {
        $this->db->where("id", $data['id']);
        $this->db->update("tarefa", $data);
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $this->db->delete('tarefa');
    }
    
    public function cincoUltimasTarefas(){
        $this->db->where('status', 'A');
        $this->db->limit(5);
        $this->db->order_by('data_ini', 'desc');
        $this->db->select('tarefa.*, cliente.nome');
        $this->db->join('cliente', 'cliente.id = tarefa.id_cliente');
        return $this->db->get("tarefa");
    }
    
    public function buscarPor($id){
        $this->db->join('cliente', 'cliente.id = tarefa.id_cliente');
        $this->db->where('tarefa.id', $id);
        $query = $this->db->get("tarefa");
        return $query->result();
    }
}