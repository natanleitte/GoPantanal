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
                </section>

                <section id="compromisso" class="pmb-block js-container-tab">
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
                </section>

                <section id="orcamento" class="pmb-block js-container-tab">
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
                            <option value="rechnung">Rechnung</option>

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

                    <section id="botoes">
                        <div class="btn-demo">
                            <?php echo form_open(base_url() . "index.php/tarefa/gerarPDF"); ?>
                            <input id="nome" name="nome" type="hidden" />
                            <input id="html" name="html" type="hidden" />
                            <button class="btn btn-icon bgm-red m-b-30" onclick="perfilCliente.prepararParaGerarPDF()"><i class="zmdi zmdi-print"></i></button>
                            <?php echo form_close() ?>
                        </div>
                        <?php echo form_open(base_url() . 'index.php/mail/enviarOrcamento'); ?>
                        <input id="email" name="email" type="hidden" />
                        <input id="corpoDoEmail" name="corpoDoEmail" type="hidden" />
                        <button class="btn btn-icon bgm-blue m-b-30" onclick="perfilCliente.enviarOrcamento()"><i class="zmdi zmdi-mail-send"></i></button>
                        <?php echo form_close() ?>
                    </section>
                </section>

                <section id="agendar-compromissos" class="pmb-block js-container-tab">
                    <div class="col-lg-10">
                        <div class="alert color bgm-cyan col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Fazer o orçamento, cotação e bloqueios nas pousadas, etc.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-cyan', 2, 'Fazer o orçamento, cotação e bloqueios nas pousadas, etc.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                    <div class="col-lg-10">
                        <div class="alert color bgm-lightblue col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Perdir confirmação do orçamento.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-lightblue', 7, 'Perdir confirmação do orçamento.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                    <div class="col-lg-10">
                        <div class="alert color bgm-blue col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Enviar fatura.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-blue', 2, 'Enviar fatura.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                    <div class="col-lg-10">
                        <div class="alert color bgm-bluegray col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Enviar comprovante deposito.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-bluegray', 2, 'Enviar comprovante deposito.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                    <div class="col-lg-10">
                        <div class="alert color bgm-lightgreen col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Confirmar bloqueios nas pousadas, etc.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-lightgreen', 3, 'Confirmar bloqueios nas pousadas, etc.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                    <div class="col-lg-10">
                        <div class="alert color bgm-green col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Depositar sinal para as pousadas, etc.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-green', 7, 'Depositar sinal para as pousadas, etc.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                    <div class="col-lg-10">
                        <div class="alert color bgm-teal col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Contato de verificação e lembrar o pagamento restante.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-teal', 30, 'Contato de verificação e lembrar o pagamento restante.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                    <div class="col-lg-10">
                        <div class="alert color bgm-orange col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Prazo para o pagamento restante.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-orange', 7, 'Prazo para o pagamento restante.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                    <div class="col-lg-10">
                        <div class="alert color bgm-indigo col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Enviar comprovante do deposito e voucher.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-indigo', 1, 'Enviar comprovante do deposito e voucher.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                    <div class="col-lg-10">
                        <div class="alert color bgm-brown col-lg-1" role="alert"></div>
                        <span class="col-lg-9">Perguntar feedback.</span>
                        <button class="btn btn-sm btn-group-demo" onclick="perfilCliente.inserirTarefaCom('bgm-brown', 7, 'Perguntar feedback.', <?php echo $cliente->id; ?>)">Agendar</button>
                    </div>
                </section>

                <section id="tour-individual" class="pmb-block js-container-tab">
                    <div class="pmbb-body card-padding">
                        <div class="form-wizard-basic fw-container">
                            <ul class="tab-nav text-center" data-tab-color="green">
                                <li class="active"><a href="#hotelTour" data-toggle="tab"><i class="zmdi zmdi-hotel"></i> Hotel</a></li>
                                <li><a href="#passeioTour" data-toggle="tab"><i class="zmdi zmdi-nature-people"></i> Passeio</a></li>
                                <li><a href="#transporteTour" data-toggle="tab"><i class="zmdi zmdi-car"></i> Transporte</a></li>
                                <li><a href="#guiaTour" data-toggle="tab"><i class="zmdi zmdi-face"></i> Guia</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="hotelTour">
                                    <?php include "tourIndividual/hotelTour.php"; ?>
                                </div>
                                <div class="tab-pane fade" id="passeioTour">
                                    <?php include "tourIndividual/passeioTour.php"; ?>
                                </div>
                                <div class="tab-pane fade" id="transporteTour">
                                    <?php include "tourIndividual/transporteTour.php"; ?>
                                </div>
                                <div class="tab-pane fade" id="guiaTour">
                                    <?php include "tourIndividual/guiaTour.php"; ?>
                                </div>
                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <div class="jumbotron text-center">
                            <div class="right color c-green">
                                <h1>Total do tour R$ 0,00</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <script>
                    $(document).ready(function () {
                        perfilCliente.controladorTabs();
                    });
                </script>
            </div>
        </div>
    </div>
</section>
