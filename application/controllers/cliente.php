<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class Cliente extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->configuracoesBasicasParaCarregarPagina();

        $this->load->view('header', $this->data);
        $this->load->view('cliente/index', $this->data);
        $this->load->view('footerClientes', $this->data);
    }

    public function inserir() {
        $this->configuracoesBasicasParaCarregarPagina();

        $this->load->view('header', $this->data);
        $this->load->view('cliente/inserir');
        $this->load->view('footer');
    }

    public function inserirCliente() {
        $this->load->model("ClienteModel");

        $this->data['nome'] = $this->input->post('nome');
        $this->data['telefone'] = $this->input->post('telefone');
        $this->data['email'] = $this->input->post('email');
        $this->data['nacionalidade'] = $this->input->post('nacionalidade');
        $this->data['passaporte'] = $this->input->post('passaporte');
        $this->data['data_contato'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('data_contato'));
        $this->data['origem_contato'] = $this->input->post('origem_contato');
        $this->data['observacao'] = $this->input->post('observacao');

        $this->ClienteModel->setCliente($this->data);
    }

    public function profile() {
        $this->configuracoesBasicasParaCarregarPagina();
        $this->data['cliente'] = $this->ClienteModel->getCliente($this->input->get('id', TRUE));

        $this->load->view('header', $this->data);
        $this->load->view('cliente/profile', $this->data);
        $this->load->view('footer');
    }

    public function editar() {
        $this->configuracoesBasicasParaCarregarPagina();

        $this->load->view('header', $this->data);
        $this->load->view('cliente/editar', $this->data);
        $this->load->view('footer');
    }

    public function atualizarObservacao() {
        $data['observacao'] = $this->input->post('observacao');
        $this->ClienteModel->updateCliente($data, $this->input->get('id', TRUE));
        $this->profile();
    }

    public function atualizarCliente() {
        $this->data['nome'] = $this->input->post('nome');
        $this->data['telefone'] = $this->input->post('telefone');
        $this->data['email'] = $this->input->post('email');
        $this->data['nacionalidade'] = $this->input->post('nacionalidade');
        $this->data['passaporte'] = $this->input->post('passaporte');
        $this->data['data_contato'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('data_contato'));
        $this->data['origem_contato'] = $this->input->post('origem_contato');
        $this->data['observacao'] = $this->input->post('observacao');

        $this->ClienteModel->updateCliente($this->data, $this->input->get('id', TRUE));
        $this->profile();
    }

    public function buscaCliente() {
        $clientes = $this->ClienteModel->getClientePorNome($this->input->post('query'));
        echo json_encode($clientes->result());
        return $clientes->result();
    }

    public function adicionarHotelTour() {
        $this->data['id_tour'] = 2;
        $this->data['id_hotel'] = $this->input->post('idHotel');
        $this->data['data_ini'] = "";
        $this->data['data_fim'] = "";
        $this->data['preco'] = 0;

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
        $this->data['hoteisTour'] = $this->HotelTourModel->getHoteis();
        $this->data['guias'] = $this->GuiaModel->getGuias();
        $this->data['passeios'] = $this->PasseioModel->getPasseios();
        $this->data['transportes'] = $this->TransporteModel->getTransportes();
    }

}
