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
        $this->load->view('footer', $this->data);
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

        $id = $this->ClienteModel->setCliente($this->data);
        $this->criarTourIndividual($id);
    }

    private function criarTourIndividual($id) {
        $this->data = [];
        $this->data['id_cliente'] = $id;
        $this->data['data_tour_ini'] = "";
        $this->data['data_tour_fim'] = "";
        $this->TourModel->inserir($this->data);
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

    private function configuracoesBasicasParaCarregarPagina() {
        $idCliente = $this->input->get('id', TRUE);
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['clientes'] = $this->ClienteModel->getClientesPorDataDesc();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
        $this->data['hoteis'] = $this->HotelModel->getHoteis();
        $this->data['hoteisTour'] = $this->HotelTourModel->obterTodosDeUmCliente($idCliente);
        $this->data['guias'] = $this->GuiaModel->getGuias();
        $this->data['guiasTour'] = $this->GuiaTourModel->obterTodosDeUmCliente($idCliente);
        $this->data['passeios'] = $this->PasseioModel->getPasseios();
        $this->data['passeiosTour'] = $this->PasseioTourModel->obterTodosDeUmCliente($idCliente);
        $this->data['transportes'] = $this->TransporteModel->getTransportes();
        $this->data['transportesTour'] = $this->TransporteTourModel->obterTodosDeUmCliente($idCliente);
    }

}
