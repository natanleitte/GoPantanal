<div class="select select-box">
    <label for="seletetorDeOrcamento" class="c-blue">Selecione o orçamento que deseja: </label>
    <select id="seletetorDeOrcamento" class="form-control">
        <option value="budgetKomboUpgrade5_4" selected>Budget Kombo Upgrade 5-4</option>
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
        perfilCliente.exibirOrcamentos();
    });
</script>

<br/>

<section id="orcamentos-modelos">
    <?php include 'orcamentos/budgetKomboUpgrade5_4.php'; ?>
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
    <div class="card-body card-padding">
        <div class="btn-demo col">
            <div class="col-lg-1">
                <?php echo form_open(base_url() . "index.php/tarefa/gerarPDF"); ?>
                <input id="nome" name="nome" type="hidden" />
                <input id="html" name="html" type="hidden" />
                <button class="btn btn-primary btn-icon btn-warning waves-effect waves-circle waves-float" onclick="perfilCliente.prepararParaGerarPDF()"><i class="zmdi zmdi-print"></i></button>
                <?php echo form_close(); ?>
            </div>
            <div class="col-lg-1">
                <button class="btn btn-info btn-icon waves-effect waves-circle waves-float" onclick="email.enviarOrcamento()"><i class="zmdi zmdi-mail-send"></i></button>
            </div>
        </div>
    </div>
</section>
