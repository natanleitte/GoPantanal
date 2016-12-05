<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>TRANSPORTES</h2>

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
                <h2>Transportes</h2>
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
                        foreach ($transportes->result() as $transporte) {
                            echo "<tr id='transporte-" . $transporte->id . "'>";
                            echo "<td>" . $transporte->nome . "</td>";
                            echo "<td>" . $transporte->telefone . "</td>";
                            echo "<td>" . $transporte->email . "</td>";
                            echo "<td>" . $transporte->responsavel . "</td>";
                            echo "<td>" . $transporte->endereco . "</td>";
                            echo "<td>" . $transporte->cidade . "</td>";
                            echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='excluirTransporte(" . $transporte->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>                    
</section>
<script type="text/javascript">
    function excluirTransporte(idTransporte)
    {
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/transporte/excluirTransporte',
            type: 'POST',
            data: {
                idTransporte: idTransporte
            },
            success: function (msg) {
                $('#transporte-' + idTransporte).remove();
                swal("Transporte excluido com sucesso!", "", "success");
            }
        });
    }
</script>