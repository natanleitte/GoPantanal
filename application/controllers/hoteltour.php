<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class HotelTour extends CI_Controller {

    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('HotelModel');
        $this->load->model('HotelTourModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->configuracoesBasicasParaCarregarPagina();
        $this->data['cliente'] = $this->ClienteModel->getCliente($this->input->get('id', TRUE));
        $this->data['tour'] = $this->input->get('id', TRUE);

        $this->load->view('header', $this->data);
        $this->load->view('hoteltour/index', $this->data);
        $this->load->view('footer');
    }

    public function inserirHotelTour() {
        $this->load->model("HotelTourModel");

        $this->data['id_hotel'] = $this->input->post('hotel');
        $this->data['data_ini'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('data_ini'));
        $this->data['data_fim'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('data_fim'));
        $this->data['id_tour'] = $this->input->post('tour');

        echo $this->data['id_hotel'];

        $this->HotelTourModel->setHotelTour($this->data);
    }

    private function configuracoesBasicasParaCarregarPagina() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['clientes'] = $this->ClienteModel->getClientesPorDataDesc();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $this->data['hoteis'] = $this->HotelModel->getHoteis();
    }
}
?>