<section id="content">
    <div class="container">
        <div class="block-header">

            <ul class="actions">
                <li>
                    <a href="">
                        <i class="zmdi zmdi-trending-up"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="zmdi zmdi-check-all"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="">Refresh</a>
                        </li>
                        <li>
                            <a href="">Manage Widgets</a>
                        </li>
                        <li>
                            <a href="">Widgets Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Emails</h2>
            </div>

            <table id="data-table-command" class="table table-striped table-vmiddle">
                <thead>
                    <tr>
                        <th data-column-id="id" data-type="text">De</th>
                        <th data-column-id="sender">Assunto</th>
                        <th data-column-id="received" data-order="desc">Data</th>
                        <th data-column-id="commands" data-formatter="commands" data-sortable="false"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'PhpImap\Mailbox.php';
                    include 'PhpImap\IncomingMail.php';

                    $servidor = 'a2plcpnl0303.prod.iad2.secureserver.net';
                    $usuario = 'jorge@leafweb.com.br';
                    $senha = 'WolV@972';

                    $mailbox = new PhpImap\Mailbox('{' . $servidor . ':993/imap/ssl}INBOX', $usuario, $senha);
                    $mails = array();
                    $mailsIds = $mailbox->searchMailbox('ALL');


                    //if (!$mailsIds) {
                    //    die('Mailbox is empty');
                    //}
                    //$id = reset($mailsIds);
                    //$mail = $mailbox->getMail($id);
                    //var_dump($mail);

                    foreach ($mailsIds as $id) {
                        try {
                            $mail = $mailbox->getMail($id);
                        } catch (Exception $exc) {
                            echo 'Houve um erro ao recuperar o email com id: ' . $id . '. <br>Erro: ' . $exc->getTraceAsString();
                        }
                        ?>
                        <tr>
                            <td><?php echo $mail->fromAddress; ?></td>
                            <td><?php echo $mail->subject; ?></td>
                            <td><?php echo $mail->date; ?></td>
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
                    return "<button type=\"button\" class=\"btn btn-icon command-edit waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " +
                            "<button type=\"button\" class=\"btn btn-icon command-delete waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                }
            }
        });
    });
</script>