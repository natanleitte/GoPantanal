<div class="select select-box">
    <label for="seletorDeDocumentos" class="c-blue">Selecione o documento que deseja: </label>
    <select id="seletetorDeDocumentos" class="form-control">
        <option value="fatura" selected>Fatura</option>
        <option value="confirmacaoDePagamento">Confirmação de Pagamento</option>
    </select>
</div>
<script>
    $(document).ready(function () {
        perfilCliente.exibirDocumentos();
    });
</script>

<br/>

<section id="documentos-modelos">
    <?php include 'documentos/fatura.php'; ?>
    <?php include 'documentos/confirmacaoDePagamento.php'; ?>
</section>

<section id="botoes" class="content">
    <div class="card-body card-padding">
        <div class="btn-demo">
            <div class="col-lg-1">
                <?php echo form_open(base_url() . "index.php/tarefa/gerarPDF"); ?>
                <input id="nome_seletetorDeDocumentos" name="nome" type="hidden" />
                <input id="html_seletetorDeDocumentos" name="html" type="hidden" />
                <button class="btn btn-primary btn-icon btn-warning waves-effect waves-circle waves-float" onclick="perfilCliente.prepararParaGerarPDF('seletetorDeDocumentos')"><i class="zmdi zmdi-print"></i></button>
                <?php echo form_close(); ?>
            </div>
            <div class="col-lg-1">
                <button class="btn btn-info btn-icon waves-effect waves-circle waves-float" onclick="email.enviarDocumento()"><i class="zmdi zmdi-mail-send"></i></button>
            </div>
        </div>
    </div>
</section>
