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

            <table id="data-table-command" class="table table-striped table-vmiddle js-email">
                <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric" data-identifier="true">Id</th>
                        <th data-column-id="De" data-type="text">De</th>
                        <th data-column-id="Assunto">Assunto</th>
                        <th data-column-id="Data" data-order="desc">Data</th>
                        <th data-column-id="commands" data-formatter="commands"
                            data-sortable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($emails as $email) { ?>
                    <tr>
                        <td> <?php echo $email->idDoEmailNoServidor; ?> </td>
                        <td><?php echo $email->emailRemetente; ?></td>
                        <td><?php echo $email->assunto; ?></td>
                        <td><?php echo $email->dataDeEnvio; ?></td>
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
                    return "<div class=\"row\">"+
                            "<form action=\"http://localhost/projects/goPantanal/GoPantanal/index.php/Mail/detalharEmail\" method=\"post\" accept-charset=\"utf-8\" class=\"col-sm-6 col-md-3\">" +
                            "<input id=\"js-input-com-id-do-email\" name=\"input-com-id-do-email\" hidden=\"true\" value=\"" + row.id + "\" />" +
                            "<button id=\"js-botao-visualizar-email\" type=\"submit\" class=\"btn btn-icon command-edit waves-effect waves-circle\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Visualizar e-mail\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-email-open\"></span></button></form>" +
                            
                            "<form action=\"http://localhost/projects/goPantanal/GoPantanal/index.php/Mail/excluirEmail\" method=\"post\" accept-charset=\"utf-8\" class=\"col-sm-6 col-md-3\">" +
                            "<input id=\"js-input-com-id-do-email\" name=\"input-com-id-do-email\" hidden=\"true\" value=\"" + row.id + "\" />" +
                            "<button type=\"submit\" class=\"btn btn-icon command-delete waves-effect waves-circle\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Excluir\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button></form>"+
                            "<\div>";
                }
            }
        });
        
        $('.js-email').parent('tr').css('font-weight', 'bold');
    });
</script>