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
                    <li class="active waves-effect"><a href="#">Início</a></li>
                    <li class="waves-effect"><a href="#">Compromissos Agendados</a></li>
                    <li class="waves-effect"><a href="#">Orçamentos</a></li>                 
                </ul>

                <div class="pmb-block">
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
        </div>
    </div>
</section>
