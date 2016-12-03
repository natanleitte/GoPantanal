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
                            <th data-column-id="sender">Telefone</th>
                            <th data-column-id="received" data-order="desc">Email</th>
                            <th data-column-id="sender">Responsável</th>
                            <th data-column-id="sender">Endereço</th>
                            <th data-column-id="sender">Cidade</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($hoteis->result() as $hotel) {
                            echo "<tr>";
                            echo "<td>" . $hotel->nome . "</td>";
                            echo "<td>" . $hotel->telefone . "</td>";
                            echo "<td>" . $hotel->email . "</td>";
                            echo "<td>" . $hotel->responsavel . "</td>";
                            echo "<td>" . $hotel->endereco . "</td>";
                            echo "<td>" . $hotel->cidade . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>                    
</section>