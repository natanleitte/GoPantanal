<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>HOTÉIS</h2>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Hotéis</h2>
            </div>

            <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped">
                    <thead>
                        <tr>
                            <th data-column-id="id" data-type="numeric">Nome</th>
                            <th>Telefone</th>
                            <th data-column-id="received" data-order="desc">Email</th>
                            <th>Responsável</th>
                            <th>Endereço</th>
                            <th>Cidade</th>
                            <th>Conta</th>
                            <th>Agência</th>
                            <th>Banco</th>
                            <th>Titular</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($hoteis->result() as $hotel) {
                            echo "<tr id='hotel-" . $hotel->id . "'>";
                            echo "<td>" . $hotel->nome . "</td>";
                            echo "<td>" . $hotel->telefone . "</td>";
                            echo "<td>" . $hotel->email . "</td>";
                            echo "<td>" . $hotel->responsavel . "</td>";
                            echo "<td>" . $hotel->endereco . "</td>";
                            echo "<td>" . $hotel->cidade . "</td>";
                            echo "<td>" . $hotel->conta . "</td>";
                            echo "<td>" . $hotel->agencia . "</td>";
                            echo "<td>" . $hotel->banco . "</td>";
                            echo "<td>" . $hotel->titular_conta . "</td>";
                            echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='excluirHotel(" . $hotel->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>                    
</section>
<script type="text/javascript">
    function excluirHotel(idHotel)
    {
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/hotel/excluirHotel',
            type: 'POST',
            data: {
                idHotel: idHotel
            },
            success: function (msg) {
                $('#hotel-' + idHotel).remove();
                swal("Hotel excluido com sucesso!", "", "success");
            }
        });
    }
</script>