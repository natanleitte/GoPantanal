<?php
foreach ($cliente->result() as $row) {
    $cliente = $row;
}
?>
<script type="text/javascript">
    $(function () {
        $('#data').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });
</script>
<section id="content">
    <div class="container">

        <div class="block-header">
            <h2><?php echo $cliente->nome; ?> <!--<small>Web/UI Developer, Edinburgh, Scotland</small>--></h2>
        </div>

        <div class="card" id="profile-main">
            <div class="pm-body">
                <ul class="tab-nav tn-justified">
                    <li class="active waves-effect"><a id="botao-perfil" href="#">Início</a></li>
                    <li class="waves-effect"><a id="botao-compromisso" href="#">Compromissos Agendados</a></li>
                    <li class="waves-effect"><a id="botao-orcamento" href="#">Orçamentos</a></li>                 
                </ul>

                <div id="perfil" class="pmb-block">
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
                                <dd><?php echo $cliente->email; ?></dd>
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
                <div id="compromisso" style="display:none;">
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
                                echo "<h2 class='ptb-title'>" . $tarefa->titulo . "</h2>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        }
                        ?>
                    </div>
                </div>

                <script>
                    $('#botao-compromisso').on('click', function () {
                        $('#botao-compromisso').parent('li').addClass('active');
                        $('#compromisso').show();
                        $('#botao-perfil').parent('li').removeClass('active');
                        $('#perfil').hide();
                        $('#botao-orcamento').parent('li').removeClass('active');
                        $('#orcamento').hide();
                    });
                    $('#botao-perfil').on('click', function () {
                        $('#botao-compromisso').parent('li').removeClass('active');
                        $('#compromisso').hide();
                        $('#botao-perfil').parent('li').addClass('active');
                        $('#perfil').show();
                        $('#botao-orcamento').parent('li').removeClass('active');
                        $('#orcamento').hide();
                    });
                    $('#botao-orcamento').on('click', function () {
                        $('#botao-orcamento').parent('li').addClass('active');
                        $('#orcamento').show();
                        $('#botao-compromisso').parent('li').removeClass('active');
                        $('#compromisso').hide();
                        $('#botao-perfil').parent('li').removeClass('active');
                        $('#perfil').hide();
                    });
                </script>
            </div>
            <div id="orcamento" style="display:none;">
                <div class="invoice">
                    <div class="card">
                        <div class="card-header ch-alt text-center">
                            <img class="i-logo" src="<?php echo base_url(); ?>assets/img/logo-grande.png" alt="">
                        </div>
                        <div class="card-body card-padding">
                            <div class="center">
                                <h3 class="ptb-title">A) BUDGET PANTANAL mit Privattransfer am 1.Tag(P)<br />(3 Tage/2 Nächte)</h3>
                            </div>
                            <div class="row m-b-25">
                                <div class="col-xs-6">
                                    <div class="text-right">
                                        <p class="c-gray">Von</p>
                                        <h4>Martin Arn</h4>
                                        <span class="text-muted">
                                            <address>
                                                1070, Rua Autonomista
                                                Campo Grande, Mato Grosso do Sul<br>
                                                Brasil
                                            </address>
                                            +55 67 3014-9449 | 9987-1191<br/>
                                            info@pantanal.com | pantanal@gmx.net
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="i-to">
                                        <p class="c-gray">Nach</p>
                                        <h4><?php echo $cliente->nome; ?></h4>
                                        <span class="text-muted">
                                            <address>
                                                <?php echo $cliente->nacionalidade; ?>
                                            </address>
                                            <?php echo $cliente->telefone; ?><br/>
                                            <?php echo $cliente->email; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row m-t-25 p-0 m-b-25">
                                <div class="col-xs-4">
                                    <div class="bgm-blue brd-2 p-15">
                                        <div class="c-white m-b-5"><b>Datum</b></div>
                                        <h2 class="m-0 c-white f-300">20/06/2015</h2>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="bgm-green brd-2 p-15">
                                        <div class="c-white m-b-5"><b>Datenausgabe</b></div>
                                        <h2 class="m-0 c-white f-300">20/07/2015</h2>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="bgm-red brd-2 p-15">
                                        <div class="c-white m-b-5"><b>Gesamt</b></div>
                                        <h2 class="m-0 c-white f-300">$23,980</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="p-25">
                                <h4 class="c-green f-400">1.Tag</h4>
                                <p class="c-gray">14:22 Ankunft und Empfang am Flughafen, dann direkt mit Privattransfer zur Pantanal jungle lodge. Ankunft und check-in lodge um ca. 19:00.
                                    Unterkunft in Privatzimmer mit Klimaanlage, Bad und Kühlschrank. Die jungle lodge ist eine rustikale, kürzlich renovierte Anlage direkt am Mirandafluss mit Speiseraum,
                                    Aufenthaltsraum,Bar,  Pool und wifi gratis. Das Essen in ist sehr gut!</p>

                                <br/>

                                <h4 class="c-green f-400">2.Tag</h4>
                                <p class="c-gray">Morgens und Nachmittags, Safariaktivitäten.</p>

                                <br/>

                                <h4 class="c-green f-400">3.Tag</h4>
                                <p class="c-gray">Morgens, nochmals Safariaktivität, nach dem Mittagessen check-out und transfer mit shuttlebus nach Campo Grande/Bonito oder zur Bushaltestelle für Bus nach Corumbá/Bolivien. Ankunft in Campo Grande 19:00.</p>
                            </div>
                            <div class="clearfix"></div>
                            <table class="table i-table m-t-25 m-b-25">
                                <thead class="text-uppercase">
                                <th class="c-gray"></th>
                                </thead>
                                <tbody>
                                <thead>
                                    <tr>
                                        <td width="80%">
                                            <h5 class="text-uppercase f-400">Inbergriffen</h5>
                                            <p class="text-muted">Privattransfer* Campo Grande - jungle Lodge mit engl. oder deutschspr. Fahrer, Rückfahrt-transfers nach Campo Grande mit shuttlebus, alle
                                                Übernachtungen mit Vollpension, alle Safariaktivitäten mit englischspr. Guide, alle Taxen. * Der Privattransfer ist nötig, da der shuttlebus nur morgens 10 Uhr ins Pantanal fährt.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="text-uppercase f-400">Nicht inbegriffen</h5>
                                            <p class="text-muted">Mittagessen am 1.Tag, Getränke und pers, Ausgaben</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="text-uppercase f-400">Safariaktivitäten im Pantanal sind</h5>
                                            <p class="text-muted">Jeepsafari, Dschungelwanderung (ca 1,5 Std.), Bootsafari, Nachtexpedition, Kanufahren, Piranha Angeln. Die Reihenfolge dieser Aktivitäten wird von der Lodge organisiert.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="text-uppercase f-400">Anmerkungen</h5>
                                            <p class="text-muted">Bei dieser Tour sind für den Transfer am ersten Tag privat unterwegs, danach, zusammen mit Pantanalbesuchern von anderen Angenturen.
                                                Es ist alles bestens organisert für ein eindrückliches und sorgloses Pantanalerlbnis. Die Safariaktivitäten finden in Gruppen bis ca. 10 Personen statt.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="highlight" width="100%">Preis: 430 - Euro/Person<br />(Einzelzimmerzuschlag: 50 - Euro)<td>
                                    </tr>
                                </thead> 
                                </tbody>
                            </table>
                        </div>
                        <footer class="m-t-15 p-20">
                            <ul class="list-inline text-center list-unstyled">
                                <li class="m-l-5 m-r-5"><small>info@pantanal.com | pantanal@gmx.net</small></li>
                                <li class="m-l-5 m-r-5"><small>+55 67 3014-9449 | 9987-1191</small></li>
                                <li class="m-l-5 m-r-5"><small>www.gopantanal.com</small></li>
                            </ul>
                        </footer>
                    </div>
                </div>
                <button class="btn btn-float bgm-red m-btn" data-action="print"><i class="zmdi zmdi-print"></i></button>
            </div>
        </div>
    </div>
</section>
