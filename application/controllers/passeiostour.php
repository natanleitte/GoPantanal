<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class PasseiosTour extends CI_Controller {

    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('HotelModel');
        $this->load->model('TransporteModel');
        $this->load->model('HotelTourModel');
        $this->load->model('TransporteTourModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->configuracoesBasicasParaCarregarPagina();
        $data['cliente'] = $this->ClienteModel->getCliente($this->input->get('id', TRUE));
        $data['tour'] = $this->input->get('id', TRUE);

        $this->load->view('header', $data);
        $this->load->view('passeiostour/index', $this->data);
        $this->load->view('footer');
    }

    public function inserirTransporteTour() {
        $this->load->model("TransporteTourModel");

        $this->data['id_transporte'] = $this->input->post('transporte');
        $this->data['data_ini'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('data_ini'));
        $this->data['data_fim'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('data_fim'));
        $this->data['id_tour'] = $this->input->post('tour');

        $this->TransporteTourModel->setTransporteTour($this->data);
    }

    private function configuracoesBasicasParaCarregarPagina() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['clientes'] = $this->ClienteModel->getClientesPorDataDesc();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['transportes'] = $this->TransporteModel->getTransportes();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
    }
}
?>