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
                </ul>

                <div id="perfil" class="pmb-block js-container-tab">
                    <div class="pmbb-header">
                        <h2><i class="zmdi zmdi-account m-r-5"></i> Informações</h2>
                        <ul class="actions">
                            <li>
                                <a data-pmb-action="edit" href="<?php echo base_url() . "index.php/cliente/editar?id=" . $cliente->id ?>"><i class="zmdi zmdi-edit zmdi-hc-5x"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="pmbb-body p-l-30">
                        <div class="pmbb-view">
                            <dl class="dl-horizontal">
                                <dt>Nome</dt>
                                <dd><?php echo $cliente->nome; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Email</dt>
                                <dd id="emailDoDestinatario"><?php echo $cliente->email; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Telefone</dt>
                                <dd><?php echo $cliente->telefone; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Nacionalidade</dt>
                                <dd><?php echo $cliente->nacionalidade; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Passaporte</dt>
                                <dd><?php echo $cliente->passaporte; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Origem do Contato</dt>
                                <dd><?php echo $cliente->origem_contato; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Data do contato</dt>
                                <dd><?php echo date('d/m/Y', strtotime($cliente->data_contato)); ?></dd>
                            </dl>
                        </div>
                        <div class="pmbb-edit">
                            <?php echo form_open(base_url() . "index.php/cliente/atualizarCliente?id=" . $cliente->id); ?>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Nome</dt>
                                <dd>
                                    <div class="fg-line">
                                        <input name="nome" type="text" class="form-control" value="<?php echo $cliente->nome; ?>">
                                    </div>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">E-mail</dt>
                                <dd>
                                    <div class="fg-line">
                                        <input name="email" type="text" class="form-control" value="<?php echo $cliente->email; ?>">
                                    </div>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Telefone</dt>
                                <dd>
                                    <div class="fg-line">
                                        <input name="telefone" type="text" class="form-control" value="<?php echo $cliente->telefone; ?>">
                                    </div>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Nacionalidade</dt>
                                <dd>
                                    <div class="fg-line">
                                        <input name="nacionalidade" type="text" class="form-control" value="<?php echo $cliente->nacionalidade; ?>">
                                    </div>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Passaporte</dt>
                                <dd>
                                    <div class="fg-line">
                                        <input name="passaporte" type="text" class="form-control" value="<?php echo $cliente->passaporte; ?>">
                                    </div>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Origem Contato</dt>
                                <dd>
                                    <div class="select">
                                        <select name="origem_contato" class="form-control" placeholder="Origem do Contato">
                                            <option value="">Origem do contato...</option>
                                            <option value="Email">Email</option>
                                            <option value="Telefone">Telefone</option>
                                            <option value="Site">Site</option>
                                            <option value="Pessoal">Pessoal</option>
                                        </select>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Data Contato</dt>
                                <dd>
                                    <div class="fg-line">
                                        <input name="data_contato" id="data" type="text" class="form-control" value="<?php echo $cliente->data_contato; ?>">
                                    </div>
                                </dd>
                            </dl>

                            <div class="m-t-30">
                                <button class="btn btn-primary btn-sm">Atualizar</button>
                                <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancelar</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="pmb-block">
                        <div class="pmbb-header">
                            <h2><i class="zmdi zmdi-assignment-o m-r-5"></i> Observação</h2>

                            <ul class="actions">
                                <li>
                                    <a data-pmb-action="edit" href=""><i class="zmdi zmdi-edit zmdi-hc-5x"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="pmbb-body p-l-30">
                            <div class="pmbb-view">
                                <?php echo $cliente->observacao; ?>
                            </div>
                            <br />
                            <br />
                            <div class="pmbb-edit">
                                <?php echo form_open(base_url() . "index.php/cliente/atualizarObservacao?id=" . $cliente->id); ?>
                                <div class="fg-line">
                                    <textarea name="observacao" class="form-control" rows="5" placeholder="Insira aqui sua observação..."><?php echo $cliente->observacao; ?></textarea>
                                </div>
                                <div class="m-t-10">
                                    <button class="btn btn-primary btn-sm">Atualizar</button>
                                    <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancelar</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="compromisso" class="pmb-block js-container-tab" style="display:none;">
                    <div class="card-body card-padding">                     
                        <?php
                        foreach ($tarefas->result() as $tarefa) {
                            if ($tarefa->id_cliente === $cliente->id) {
                                echo "<div class='p-timeline'>";
                                echo "<div class='pt-line c-gray text-right'>";
                                echo "<span class='d-block'>" . date('Y', strtotime($tarefa->data_ini)) . "</span>";
                                echo date('d/M', strtotime($tarefa->data_ini));
                                echo "</div>";
                                echo "<div class='pt-body'>";
                                echo "<div class='lightbox clearfix'>";
                                echo "<h2 class='ptb-title'>" . $tarefa->descricao . "</h2>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                        ?>
                    </div>
                </div>

                <div id="orcamento" class="pmb-block js-container-tab" style="display:none;">
                    <div class="select select-box">
                        <label for="seletetorDeOrcamento" class="c-blue">Selecione o orçmento que deseja: </label>
                        <select id="seletetorDeOrcamento" class="form-control">
                            <option value="budgetKomboUpgrade5_4">Budget Kombo Upgrade 5-4</option>
                            <option value="budgetKombo5_4D">Budget Kombo 5-4 (D)</option>
                            <option value="budgetPantanal3_2D">budget Pantanal 3-2 (D)</option>
                            <option value="budgetPantanal3_2P">Budget Pantanal 3-2 (P)</option>
                            <option value="budgetPantanal4_3P">Budget Pantanal 4-3 (P)</option>
                            <option value="budgetPantanal4_3D">Budget Pantanal 4-3 (D)</option>
                            <option value="fairtradeI">Fairtrade I</option>
                            <option value="fairtradeII">Fairtrade II</option>
                            <option value="superBudget195Euro">Super Budget 195 Euro</option>
                        </select>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $(".card-orcamento").hide();
                            var orcamento = $("#seletetorDeOrcamento").val();
                            $("." + orcamento).show();
                            $("select").change(function () {
                                var orcamentoSelecionado = $(this).val();
                                $(".card-orcamento").hide();
                                $("." + orcamentoSelecionado).show();
                            });
                        });
                    </script>

                    <br/>

                    <?php include 'orcamentos/budgetKomboUpgrade5_4.php'; ?>
                    <?php include 'orcamentos/budgetKombo5_4D.php'; ?>
                    <?php include 'orcamentos/budgetPantanal3_2D.php'; ?>
                    <?php include 'orcamentos/budgetPantanal3_2P.php'; ?>
                    <?php include 'orcamentos/budgetPantanal4_3P.php'; ?>
                    <?php include 'orcamentos/budgetPantanal4_3D.php'; ?>
                    <?php include 'orcamentos/fairtradeI.php'; ?>
                    <?php include 'orcamentos/fairtradeII.php'; ?>
                    <?php include 'orcamentos/superBudget195Euro.php'; ?>

                    <div class="btn-demo">
                        <button class="btn btn-icon bgm-red m-b-30" data-action="print"><i class="zmdi zmdi-print"></i></button>
                        <button class="btn btn-icon bgm-blue m-b-30" onclick="enviarOrcamento();"><i class="zmdi zmdi-mail-send"></i></button>
                    </div>
                    <form id="formOrcamento">
                        <input id="email" name="email" type="hidden" />
                        <input id="corpoDoEmail" name="corpoDoEmail" type="hidden" />
                    </form>
                    <script type="text/javascript">
                        function enviarOrcamento()
                        {
                            var orcamentoSelecionado = $("#seletetorDeOrcamento").val();
                            $('#email').val($('#emailDoDestinatario').html());
                            $('#corpoDoEmail').val($("." + orcamentoSelecionado).html());

                            $.ajax({
                                url: '<?= base_url(); ?>' + 'index.php/mail/enviarOrcamento',
                                type: 'POST',
                                data: $("#formOrcamento").serialize(),
                                success: function (msg) {
                                    swal("Orcamento enviado com sucesso!", "", "success");
                                    $("#email, #corpoDoEmail").val('');
                                }
                            });
                        }
                    </script>
                </div>
                
                <div id="agendar-compromissos" class="pmb-block js-container-tab" style="display:none;">
                    
                </div>
                
                <script>
                    $(document).ready(function () {
                        $('#botao-compromisso').on('click', function () {
                            esconderTabsInativas();
                            exibirTabAtiva($('#botao-compromisso'), $('#compromisso'));
                        });
                        $('#botao-perfil').on('click', function () {
                            esconderTabsInativas();
                            exibirTabAtiva($('#botao-perfil'), $('#perfil'));
                        });
                        $('#botao-orcamento').on('click', function () {
                            esconderTabsInativas();
                            exibirTabAtiva($('#botao-orcamento'), $('#orcamento'));
                        });
                        
                        $('#botao-agendar-comrpomissos').on('click', function () {
                            esconderTabsInativas();
                            exibirTabAtiva($('#botao-agendar-comrpomissos'), $('#agendar-compromissos'));
                        });
                        
                        function exibirTabAtiva(nomeDoBotao, conteudoDaTab){
                            nomeDoBotao.parent('li').addClass('active');
                            conteudoDaTab.show();
                        }
                        
                        function esconderTabsInativas(){
                            $('.js-tab-menu').removeClass('active');
                            $('.js-container-tab').hide();
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</section>
