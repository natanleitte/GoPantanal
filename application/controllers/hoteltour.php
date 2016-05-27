<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class HotelTour extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->load->model('ClienteModel');
        $this->load->model('UsuarioModel');
        $this->load->model('HotelModel');
        $this->load->model('HotelTourModel');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->configuracoesBasicasParaCarregarPagina();
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $data['cliente'] = $this->ClienteModel->getCliente($this->input->get('id', TRUE));
        $data['hoteis'] = $this->HotelModel->getHoteis();
        $data['tour'] = $this->input->get('id', TRUE);

        $this->load->view('header', $data);
        $this->load->view('hoteltour/index', $data);
        $this->load->view('footer');
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

    private function configuracoesBasicasParaCarregarPagina() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['clientes'] = $this->ClienteModel->getClientesPorDataDesc();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
    }

}

?>