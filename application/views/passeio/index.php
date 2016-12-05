<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>PASSEIOS</h2>

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
                <h2>Passeios</h2>
            </div>

            <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped">
                    <thead>
                        <tr>
                            <th data-column-id="id" data-type="numeric">Nome</th>
                            <th data-column-id="sender">Telefone</th>
                            <th data-column-id="received" data-order="desc">Email</th>
                            <th data-column-id="sender">Responsável</th>
                            <th data-column-id="sender">Endereço</th>
                            <th data-column-id="sender">Cidade</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($passeios->result() as $passeio) {
                            echo "<tr id='passeio-" . $passeio->id . "'>";
                            echo "<td>" . $passeio->nome . "</td>";
                            echo "<td>" . $passeio->telefone . "</td>";
                            echo "<td>" . $passeio->email . "</td>";
                            echo "<td>" . $passeio->responsavel . "</td>";
                            echo "<td>" . $passeio->endereco . "</td>";
                            echo "<td>" . $passeio->cidade . "</td>";
                            echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='excluirPasseio(" . $passeio->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>                    
</section>
<script type="text/javascript">
    function excluirPasseio(idPasseio)
    {
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/passeio/excluirPasseio',
            type: 'POST',
            data: {
                idPasseio: idPasseio
            },
            success: function (msg) {
                $('#passeio-' + idPasseio).remove();
                swal("Passeio excluido com sucesso!", "", "success");
            }
        });
    }
</script>