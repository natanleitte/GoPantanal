<?php
include APPPATH . 'controllers/utils/DataUtils.php';

class TourIndividual extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->DataUtils = new DataUtils();
    }

    public function adicionarHotelTour() {
        $idCliente = $this->input->post('idCliente');
        $this->data['id_tour'] = $this->TourModel->obterIdPeloCliente($idCliente);
        $this->data['id_hotel'] = $this->input->post('idHotel');
        $this->data['data_ini'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('dataInicio'));
        $this->data['data_fim'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('dataFim'));
        $this->data['preco'] = doubleval($this->input->post('valor'));
        
        $id = $this->HotelTourModel->inserir($this->data);
        echo json_encode($this->HotelTourModel->obterPor($id));
    }

    public function excluirHotelTour() {
        $id = $this->input->post('idHotel');
        $this->HotelTourModel->excluir($id);
    }

    public function adicionaPasseioTour() {
        $idCliente = $this->input->post('idCliente');
        $this->data['id_tour'] = $this->TourModel->obterIdPeloCliente($idCliente);
        $this->data['id_passeio'] = $this->input->post('idPasseio');
        $this->data['data_ini'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('dataInicio'));
        $this->data['data_fim'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('dataFim'));
        $this->data['preco'] = doubleval($this->input->post('valor'));

        $id = $this->PasseioTourModel->inserir($this->data);
        echo json_encode($this->PasseioTourModel->obterPor($id));
    }

    public function excluirPasseioTour() {
        $id = $this->input->post('idPasseio');
        $this->PasseioTourModel->excluir($id);
    }

    public function adicionaTransporteTour() {
        $idCliente = $this->input->post('idCliente');
        $this->data['id_tour'] = $this->TourModel->obterIdPeloCliente($idCliente);
        $this->data['id_transporte'] = $this->input->post('idTransporte');
        $this->data['data_ini'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('dataInicio'));
        $this->data['data_fim'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('dataFim'));
        $this->data['preco'] = doubleval($this->input->post('valor'));

        $id = $this->TransporteTourModel->inserir($this->data);
        echo json_encode($this->TransporteTourModel->obterPor($id));
    }

    public function excluirTransporteTour() {
        $id = $this->input->post('idTransporte');
        $this->TransporteTourModel->excluir($id);
    }

    public function adicionaGuiaTour() {
        $idCliente = $this->input->post('idCliente');
        $this->data['id_tour'] = $this->TourModel->obterIdPeloCliente($idCliente);
        $this->data['id_guia'] = $this->input->post('idGuia');
        $this->data['data_ini'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('dataInicio'));
        $this->data['data_fim'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('dataFim'));
        $this->data['preco'] = doubleval($this->input->post('valor'));

        $id = $this->GuiaTourModel->inserir($this->data);
        echo json_encode($this->GuiaTourModel->obterPor($id));
    }

    public function excluirGuiaTour() {
        $id = $this->input->post('idGuia');
        $this->GuiaTourModel->excluir($id);
    }
    
    public function total(){
        $idCliente = $this->input->post('idCliente');
        $idTour = $this->TourModel->obterIdPeloCliente($idCliente);
        $valores = array(
                        floatval($this->GuiaTourModel->obterTotalPeloIdDoTour($idTour)),
                        floatval($this->HotelTourModel->obterTotalPeloIdDoTour($idTour)),
                        floatval($this->TransporteTourModel->obterTotalPeloIdDoTour($idTour)),
                        floatval($this->PasseioTourModel->obterTotalPeloIdDoTour($idTour))
                );
        setlocale(LC_MONETARY, 'pt_BR'); 
        echo json_encode(money_format('%.2n', array_sum($valores)));
    }

}
