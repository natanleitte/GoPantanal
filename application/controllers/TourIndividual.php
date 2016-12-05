<?php

class TourIndividual extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
    }

    public function adicionarHotelTour() {
        $this->data['id_tour'] = 2;
        $this->data['id_hotel'] = $this->input->post('idHotel');
        $this->data['data_ini'] = "";
        $this->data['data_fim'] = "";
        $this->data['preco'] = 0;

        $id = $this->HotelTourModel->inserir($this->data);
        echo json_encode($this->HotelTourModel->obterPor($id));
    }

    public function excluirHotelTour() {
        $id = $this->input->post('idHotel');
        $this->HotelTourModel->excluir($id);
    }

    public function adicionaPasseioTour() {
        $this->data['id_tour'] = 2;
        $this->data['id_passeio'] = $this->input->post('idPasseio');
        $this->data['data_ini'] = "";
        $this->data['data_fim'] = "";
        $this->data['preco'] = 0;

        $id = $this->PasseioTourModel->inserir($this->data);
        echo json_encode($this->PasseioTourModel->obterPor($id));
    }

    public function excluirPasseioTour() {
        $id = $this->input->post('idPasseio');
        $this->PasseioTourModel->excluir($id);
    }

    public function adicionaTransporteTour() {
        $this->data['id_tour'] = 2;
        $this->data['id_transporte'] = $this->input->post('idTransporte');
        $this->data['data_ini'] = "";
        $this->data['data_fim'] = "";
        $this->data['preco'] = 0;

        $id = $this->TransporteTourModel->inserir($this->data);
        echo json_encode($this->TransporteTourModel->obterPor($id));
    }

    public function excluirTransporteTour() {
        $id = $this->input->post('idTransporte');
        $this->TransporteTourModel->excluir($id);
    }
}