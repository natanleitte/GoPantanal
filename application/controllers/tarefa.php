<?php

include APPPATH . 'controllers/utils/DataUtils.php';

class Tarefa extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->UsuarioModel->estaLogado();
        $this->DataUtils = new DataUtils();
    }

    public function index() {
        $this->carregarConfiguracoesBasicas();
        $this->load->view('header', $this->data);
        $this->load->view('tarefa/index', $this->data);
        $this->load->view('footer');
    }

    public function inserirTarefa() {
        $this->data['descricao'] = $this->input->post('titulo');
        $this->data['data_ini'] = $this->DataUtils->alterarParaSeisDaManhaA($this->input->post('data_ini'));
        $this->data['data_fim'] = $this->DataUtils->alterarParaSeisDaManhaA($this->input->post('data_fim'));
        $this->data['status'] = $this->input->post('status');
        $this->data['id_cliente'] = $this->input->post('cliente');
        $this->data['cor'] = $this->input->post('cor');

        $this->TarefaModel->setTarefa($this->data);
    }

    public function inserirTarefaDetalhada() {
        $this->data['descricao'] = $this->input->post('descricao');
        $this->data['data_ini'] = $this->acrescentarDiasNaDataSendoAQtd($this->input->post('qtdDias'));
        $this->data['data_fim'] = $this->acrescentarDiasNaDataSendoAQtd($this->input->post('qtdDias'));
        $this->data['status'] = "A";
        $this->data['id_cliente'] = $this->input->post('cliente');
        $this->data['cor'] = $this->input->post('cor');

        $this->TarefaModel->setTarefa($this->data);
    }

    private function acrescentarDiasNaDataSendoAQtd($quantidade) {
        $datetime = new DateTime(null, new DateTimeZone('UTC'));
        $datetime->modify('+' . $quantidade . ' days');
        return $datetime->format('Y-m-d H:i:s') . "+0000";
    }

    public function alteraStatusDaTarefa() {
        $this->data['id'] = $this->input->post('id');
        $this->data['status'] = $this->input->post('status');
        $this->TarefaModel->updateTarefa($this->data);
    }

    public function excluir() {
        $id = $this->input->get('id', TRUE);
        $this->TarefaModel->excluir($id);
        $this->index();
    }

    public function gerarPDF() {
        $this->load->library('dompdf_gen');

        $html = '<!doctype html> 
                    <html>
                        <head>
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                        </head> 
                        <body>
                            <div id="wrapper" class="row">
                                <div class="col-md-8 pull-left">
                                    ' . $this->input->post('html') . '
                                </div>
                            </div>
                        </body> 
                    </html>';
        $nome = $this->input->post('nome');
        
        $this->dompdf->set_base_path('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        $this->dompdf->set_paper("A4", 'portrait');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream($nome);
    }

    private function carregarConfiguracoesBasicas() {
        $this->data['tarefas'] = $this->TarefaModel->getTarefas();
        $this->data['emails'] = $this->EmailModel->obterTodos();
        $this->data['qtdDeEmailsNaoLidos'] = $this->EmailModel->obterQuantidadeDeEmailsNaoLidos();
        $this->data['ultimosCincoEmails'] = $this->EmailModel->obterOsUltimosCincoEmails();
        $this->data['clientes'] = $this->ClienteModel->getClientes();
        $this->data['ultimasTarefas'] = $this->TarefaModel->cincoUltimasTarefas();
    }
}