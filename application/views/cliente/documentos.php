<div class="select select-box">
    <label for="seletorDeDocumentos" class="c-blue">Selecione o orçamento que deseja: </label>
    <select id="seletetorDeDocumentos" class="form-control">
        <option value="fatura">Fatura</option>
        <option value="budgetKombo5_4D">Budget Kombo 5-4 (D)</option>
        <option value="budgetPantanal3_2D">budget Pantanal 3-2 (D)</option>
        <option value="budgetPantanal3_2P">Budget Pantanal 3-2 (P)</option>
        <option value="budgetPantanal4_3P">Budget Pantanal 4-3 (P)</option>
        <option value="budgetPantanal4_3D">Budget Pantanal 4-3 (D)</option>
        <option value="fairtradeI">Fairtrade I</option>
        <option value="fairtradeII">Fairtrade II</option>
        <option value="superBudget195Euro">Super Budget 195 Euro</option>
        <option value="rechnung">Rechnung</option>

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
    <?php include 'orcamentos/budgetKombo5_4D.php'; ?>
    <?php include 'orcamentos/budgetPantanal3_2D.php'; ?>
    <?php include 'orcamentos/budgetPantanal3_2P.php'; ?>
    <?php include 'orcamentos/budgetPantanal4_3P.php'; ?>
    <?php include 'orcamentos/budgetPantanal4_3D.php'; ?>
    <?php include 'orcamentos/fairtradeI.php'; ?>
    <?php include 'orcamentos/fairtradeII.php'; ?>
    <?php include 'orcamentos/superBudget195Euro.php'; ?>
    <?php include 'orcamentos/rechnung.php'; ?>
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
