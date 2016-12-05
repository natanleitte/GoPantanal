<?php
foreach ($cliente->result() as $row) {
    $cliente = $row;
}
?>
<section id="content">
    <div class="container">
        <div class="card" id="profile-main">
            <div class="pm-body clearfix">
                <ul class="tab-nav tn-justified">
                    <li class="active waves-effect js-tab-menu"><a id="botao-perfil" href="#">Início</a></li>
                    <li class="waves-effect js-tab-menu"><a id="botao-agendar-comrpomissos" href="#">Agendar Compromissos</a></li>
                    <li class="waves-effect js-tab-menu"><a id="botao-compromisso" href="#">Compromissos Agendados</a></li>
                    <li class="waves-effect js-tab-menu"><a id="botao-orcamento" href="#">Orçamentos</a></li>
                    <li class="waves-effect js-tab-menu"><a id="botao-tour-individual" href="#">Tour Individual</a></li>
                </ul>

                <section id="perfil" class="pmb-block js-container-tab active">
                    <?php include "detalhePerfil.php"; ?>
                </section>

                <section id="compromisso" class="pmb-block js-container-tab">
                    <?php include "compromissosAgendados.php"; ?>
                </section>

                <section id="orcamento" class="pmb-block js-container-tab">
                    <?php include "orcamento.php"; ?>
                </section>

                <section id="agendar-compromissos" class="pmb-block js-container-tab">
                    <?php include "compromissosPreDefinidos.php"; ?>
                </section>

                <section id="tour-individual" class="pmb-block js-container-tab">
                    <?php include "tour.php"; ?>
                </section>

                <script>
                    $(document).ready(function(){
                        perfilCliente.controladorTabs();
                        tour.inserirUrl('<?= base_url(); ?>');
                    });
                </script>
            </div>
        </div>
    </div>
</section>