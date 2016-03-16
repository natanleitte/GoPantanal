<?php

class Cliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->model('TarefaModel');
        $this->load->model('EmailModel');
        $this->load->model('ClienteModel');
    }

    public function index() {
        $data['tarefas'] = $this->TarefaModel->getTarefas();
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['clientes'] = $this->ClienteModel->getClientes();

        $this->load->view('header', $data);
        $this->load->view('cliente/index', $data);
        $this->load->view('footerClientes', $data);
    }

    public function inserir() {
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $this->load->view('header', $data);
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

        $this->ClienteModel->setCliente($data);

//        header('Location:' . base_url() . 'index.php/cliente');
    }

    public function profile() {
        $data['cliente'] = $this->ClienteModel->getCliente($this->input->get('id'));
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $this->load->view('header', $data);
        $this->load->view('cliente/profile', $data);
        $this->load->view('footer');
    }

    public function editar() {
        $data['cliente'] = $this->ClienteModel->getCliente($this->input->get('id'));
        $data['emails'] = $this->EmailModel->obterTodos();
        $data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $data['tarefas'] = $this->TarefaModel->getTarefas();

        $this->load->view('header', $data);
        $this->load->view('cliente/editar', $data);
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

//           header('Location:' . base_url() . 'index.php/cliente/inserir');
    }

    public function buscaCliente() {

        $clientes = $this->ClienteModel->getClientePorNome($this->input->post('query'));
//           foreach ($clientes->result() as $cliente) {
//               echo json_encode($cliente);
//           }
//           $data['teste'] = array(
//              'nome' => $this->input->post('query')
////              'pwd' => $this->input->post('pwd')
//           );

        echo json_encode($clientes->result());
        return $clientes->result();
    }

}
