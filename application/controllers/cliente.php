<?php

include APPPATH . 'controllers\utils\DataUtils.php';

class Cliente extends CI_Controller {

    private $data;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->load->model('ClienteModel');
        $this->load->model('UsuarioModel');
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

        $data['nome'] = $this->input->post('nome');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['nacionalidade'] = $this->input->post('nacionalidade');
        $data['passaporte'] = $this->input->post('passaporte');
        $data['data_contato'] = $this->DataUtils->converteDataParaFormatoDateDoMySql($this->input->post('data_contato'));
        $data['origem_contato'] = $this->input->post('origem_contato');
        $data['observacao'] = $this->input->post('observacao');

        $this->ClienteModel->setCliente($data);
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

    public function atualizarCliente() {
        $data['nome'] = $this->input->post('nome');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');
        $data['endereco'] = $this->input->post('endereco');
        $data['passaporte'] = $this->input->post('passaporte');
        $data['id'] = $this->input->post('id');

        $this->ClienteModel->updateCliente($data, $this->input->post('id'));
    }

    public function buscaCliente() {
        $clientes = $this->ClienteModel->getClientePorNome($this->input->post('query'));
        echo json_encode($clientes->result());
        return $clientes->result();
    }

    private function configuracoesBasicasParaCarregarPagina() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['clientes'] = $this->ClienteModel->getClientesPorDataDesc();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
    }
}
