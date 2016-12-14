<div class="select select-box">
    <label for="seletorDeDocumentos" class="c-blue">Selecione o documento que deseja: </label>
    <select id="seletetorDeDocumentos" class="form-control">
        <option value="fatura">Fatura</option>
        <option value="confirmacaoDePagamento">Confirmação de Pagamento</option>
    </select>
</div>
<script>
    $(document).ready(function () {
        $(".card-orcamento").hide();
        var orcamento = $("#seletorDeDocumentos").val();
        $("." + orcamento).show();
        $("select").change(function () {
            var orcamentoSelecionado = $(this).val();
            $(".card-orcamento").hide();
            $("." + orcamentoSelecionado).show();
        });
    });
</script>

<br/>

<section id="documentos-modelos">
    <?php include 'documentos/fatura.php'; ?>
    <?php include 'documentos/confirmacaoDePagamento.php'; ?>
</section>

<section id="botoes" class="content">
    <div class="card">
        <div class="card-body card-padding">
            <div class="btn-demo">
                <?php echo form_open(base_url() . "index.php/tarefa/gerarPDF"); ?>
                <input id="nome" name="nome" type="hidden" />
                <input id="html" name="html" type="hidden" />
                <button class="btn btn-primary btn-icon btn-warning waves-effect waves-circle waves-float" onclick="perfilCliente.prepararParaGerarPDF()"><i class="zmdi zmdi-print"></i></button>
                <?php echo form_close(); ?>
                <?php echo form_open(base_url() . 'index.php/mail/enviarOrcamento'); ?>
                <input id="email" name="email" type="hidden" />
                <input id="corpoDoEmail" name="corpoDoEmail" type="hidden" />
                <button class="btn btn-info btn-icon waves-effect waves-circle waves-float" onclick="perfilCliente.enviarOrcamento()"><i class="zmdi zmdi-mail-send"></i></button>
                    <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>
