<?php

class PasseioTourModel extends CI_Model {

    private $nomeDaTabela = 'passeio_tour';

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
                "passeio.nome, " .
                "passeio.telefone, " .
                "passeio.email, " .
                "passeio.responsavel, " .
                "passeio.endereco, " .
                "passeio.cidade"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("passeio", "passeio.id = " . $this->nomeDaTabela . ".id_passeio");
        return $this->db->get();
    }

    public function obterTodosDeUmCliente($idCliente) {
        $this->db->select(
                $this->nomeDaTabela . ".id, " .
                "passeio.nome, " .
                "passeio.telefone, " .
                "passeio.email, " .
                "passeio.responsavel, " .
                "passeio.endereco, " .
                "passeio.cidade"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("passeio", "passeio.id = " . $this->nomeDaTabela . ".id_passeio");
        $this->db->join("tour", "tour.id = " . $this->nomeDaTabela . ".id_tour");
        $this->db->where("tour.id_cliente", $idCliente);
        return $this->db->get();
    }

    public function obterPor($id) {
        $this->db->select(
                $this->nomeDaTabela . ".id, " .
                "passeio.nome, " .
                "passeio.telefone, " .
                "passeio.email, " .
                "passeio.responsavel, " .
                "passeio.endereco, " .
                "passeio.cidade"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("passeio", "passeio.id = " . $this->nomeDaTabela . ".id_passeio");
        $this->db->where($this->nomeDaTabela . ".id", $id);
        return $this->db->get()->row();
    }

    public function excluir($id) {
        $this->db->where("id", $id);
        echo $this->db->delete($this->nomeDaTabela);
    }

}
