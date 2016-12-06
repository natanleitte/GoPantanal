<?php

class HotelTourModel extends CI_Model {

    private $nomeDaTabela = 'hotel_tour';

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
                "hotel.nome, " .
                "hotel.telefone, " .
                "hotel.email, " .
                "hotel.responsavel, " .
                "hotel.endereco, " .
                "hotel.cidade, " .
                "hotel.conta, " .
                "hotel.agencia, " .
                "hotel.banco, " .
                "hotel.titular_conta"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("hotel", "hotel.id = " . $this->nomeDaTabela . ".id_hotel");
        return $this->db->get();
    }

        public function obterTodosDeUmCliente($idCliente) {
        $this->db->select(
                $this->nomeDaTabela . ".id, " .
                "hotel.nome, " .
                "hotel.telefone, " .
                "hotel.email, " .
                "hotel.responsavel, " .
                "hotel.endereco, " .
                "hotel.cidade, " .
                "hotel.conta, " .
                "hotel.agencia, " .
                "hotel.banco, " .
                "hotel.titular_conta"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("hotel", "hotel.id = " . $this->nomeDaTabela . ".id_hotel");
        $this->db->join("tour", "tour.id = " . $this->nomeDaTabela . ".id_tour");
        echo "==> " + $idCliente;
        $this->db->where("tour.id_cliente", $idCliente);
        return $this->db->get();
    }
    
    public function obterPor($id) {
        $this->db->select(
                $this->nomeDaTabela . ".id, " .
                "hotel.nome, " .
                "hotel.telefone, " .
                "hotel.email, " .
                "hotel.responsavel, " .
                "hotel.endereco, " .
                "hotel.cidade, " .
                "hotel.conta, " .
                "hotel.agencia, " .
                "hotel.banco, " .
                "hotel.titular_conta"
        );
        $this->db->from($this->nomeDaTabela);
        $this->db->join("hotel", "hotel.id = " . $this->nomeDaTabela . ".id_hotel");
        $this->db->where($this->nomeDaTabela . ".id", $id);
        return $this->db->get()->row();
    }

    public function excluir($id) {
        $this->db->where("id", $id);
        echo $this->db->delete($this->nomeDaTabela);
    }

}
