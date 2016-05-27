<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class HotelTour extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('HotelTourModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function inserirHotelTour() {
        $this->load->model("HotelTourModel");

        $data['id_hotel'] = $this->input->post('hotel');
        $data['data_ini'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('data_ini'));
        $data['data_fim'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('data_fim'));
        $data['id_tour'] = $this->input->post('tour');
        
        echo $data['id_hotel'];

        $this->HotelTourModel->setHotelTour($data);
    }

}

?>