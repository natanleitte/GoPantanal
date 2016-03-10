<section id="content">
    <div class="container">
        <div class="block-header">

            <ul class="actions">
                <li><a href=""> <i class="zmdi zmdi-trending-up"></i>
                    </a></li>
                <li><a href=""> <i class="zmdi zmdi-check-all"></i>
                    </a></li>
                <li class="dropdown"><a href="" data-toggle="dropdown"> <i
                            class="zmdi zmdi-more-vert"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="">Refresh</a></li>
                        <li><a href="">Manage Widgets</a></li>
                        <li><a href="">Widgets Settings</a></li>
                    </ul></li>
            </ul>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Emails</h2>
            </div>

            <table id="data-table-command" class="table table-striped table-vmiddle">
                <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric" data-order="desc" data-identifier="true">Id</th>
                        <th data-column-id="De" data-type="text">De</th>
                        <th data-column-id="Assunto">Assunto</th>
                        <th data-column-id="Data" data-order="desc">Data</th>
                        <th data-column-id="commands" data-formatter="commands" data-sortable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($emails as $email) { ?>
                    <tr>
                        <td> <?php echo $email->idDoEmailNoServidor; ?> </td>
                        <td><?php echo $email->emailRemetente; ?></td>
                        <td><?php echo $email->assunto; ?></td>
                        <td><?php echo date('d/m/Y H:i:s', strtotime($email->dataDeEnvio)); ?></td>
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
                return  "<a class='btn btn-icon command-edit waves-effect waves-circle' href='<?php echo base_url(); ?>index.php/Mail/detalharEmail?id=" + row.id + "'><span class='zmdi zmdi-email-open'></span></a>" +
                        "<a class='btn btn-icon command-edit waves-effect waves-circle' href=' <?php echo base_url(); ?>index.php/Mail/excluirEmail?id=" + row.id + "'><span class='zmdi zmdi-delete'></span></a>";
                }
            }
        });
    });
</script>