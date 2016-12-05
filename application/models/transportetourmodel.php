<?php

class TransporteTourModel extends CI_Model {

    private $nomeDaTabela = 'transporte_tour';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function inserir($data) {
        $this->load->database();
        $this->db->insert($this->nomeDaTabela, $data);
        return $this->db->insert_id();
    }

    public function obterTodos() {
        $this->db->select(
                $this->nomeDaTabela . ".id, " .
                "transporte.nome, " .
                "transporte.telefone, " .
                "transporte.email, " .
                "transporte.responsavel, " .
                "transporte.endereco, " .
                "transporte.cidade"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("transporte", "transporte.id = " . $this->nomeDaTabela . ".id_transporte");
        return $this->db->get();
    }

    public function obterPor($id) {
        $this->db->select(
                $this->nomeDaTabela . ".id, " .
                "transporte.nome, " .
                "transporte.telefone, " .
                "transporte.email, " .
                "transporte.responsavel, " .
                "transporte.endereco, " .
                "transporte.cidade"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("transporte", "transporte.id = " . $this->nomeDaTabela . ".id_transporte");
        $this->db->where($this->nomeDaTabela . ".id", $id);
        return $this->db->get()->row();
    }

    public function excluir($id) {
        $this->db->where("id", $id);
        echo $this->db->delete($this->nomeDaTabela);
    }

}
