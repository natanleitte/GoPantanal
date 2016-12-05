<?php

class GuiaTourModel extends CI_Model {

    private $nomeDaTabela = 'guia_tour';

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
                "guia.nome, " .
                "guia.idioma, " .
                "guia.telefone, " .
                "guia.email, " .
                "guia.responsavel, " .
                "guia.endereco, " .
                "guia.cidade"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("guia", "guia.id = " . $this->nomeDaTabela . ".id_guia");
        return $this->db->get();
    }

    public function obterPor($id) {
        $this->db->select(
                $this->nomeDaTabela . ".id, " .
                "guia.nome, " .
                "guia.idioma, " .
                "guia.telefone, " .
                "guia.email, " .
                "guia.responsavel, " .
                "guia.endereco, " .
                "guia.cidade"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("guia", "guia.id = " . $this->nomeDaTabela . ".id_guia");
        $this->db->where($this->nomeDaTabela . ".id", $id);
        return $this->db->get()->row();
    }

    public function excluir($id) {
        $this->db->where("id", $id);
        echo $this->db->delete($this->nomeDaTabela);
    }

}
