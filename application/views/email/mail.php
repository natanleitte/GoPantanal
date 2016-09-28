<section id="content">
    <div class="container">

        <div class="card">
            <blockquote class="m-b-25">
                <p>E-mails</p>
            </blockquote>

            <table id="data-table-command" class="table table-striped table-vmiddle">
                <thead>
                    <tr>
                        <th data-column-id="de" data-formatter="de" data-type="text">De</th>
                        <th data-column-id="assunto" data-formatter="assunto" data-type="text">Assunto</th>
                        <th data-column-id="data" data-formatter="data" data-type="text">Data</th>
                        <th data-column-id="novo" data-formatter="novo" data-type="numeric" data-hidden="true"></th>
                        <th data-column-id="id" data-formatter="id" data-type="numeric" data-order="desc" data-hidden="true"></th>
                        <th data-column-id="commands" data-formatter="commands" data-sortable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($emails as $email) { ?>
                        <tr>
                            <td><?php echo $email->nomeRemetente; ?></td>
                            <td><?php echo $email->assunto; ?></td>
                            <td><?php echo date('d/m/Y H:i:s', strtotime($email->dataDeEnvio)); ?></td>
                            <td> <?php echo $email->foiLido; ?> </td>
                            <td> <?php echo $email->idDoEmailNoServidor; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>


<!-- Data Table -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#data-table-command").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            formatters: {
                "commands": function(column, row) {
                    return  "<a class='btn btn-icon command-edit waves-effect waves-circle' href='<?php echo base_url(); ?>index.php/Mail/detalharEmail?id=" + row.id + "'><span class='zmdi zmdi-email" + (row.novo ? "-open'" : "'") + "></span></a>" +
                            "<a class='btn btn-icon command-edit waves-effect waves-circle' href=' <?php echo base_url(); ?>index.php/Mail/excluirEmail?id=" + row.id + "'><span class='zmdi zmdi-delete'></span></a>";
                },
                "de": function(column, row) {
                    if (!row.novo) {
                        return "<b>" + row.de + "</b>";
                    } else {
                        return row.de;
                    }
                },
                "assunto": function(column, row) {
                    if (!row.novo) {
                        return "<b>" + row.assunto + "</b>";
                    } else {
                        return row.assunto;
                    }
                },
                "data": function(column, row) {
                    if (!row.novo) {
                        return "<b>" + row.data + "</b>";
                    } else {
                        return row.data;
                    }
                },
                //Esconde as informaçoes do id e de novo na tela
                "id": function(column, row) {
                    column.close;
                },
                "novo": function(column, row) {
                    column.hide;
                }
            }
        });
    });
</script>