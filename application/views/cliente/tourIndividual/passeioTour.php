<div id="hoteis">
    <div id="lista-de-hoteis">
        <div class="row">
            <?php echo form_open(base_url() . 'index.php/tourIndividual/adicionarHotel'); ?>                                    
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="hoteis" class="control-label">Selecione um Passeio</label>
                    <div class="select">
                        <select id="hoteis" name="hotel" class="form-control" placeholder="Hotéis">
                            <?php
                            foreach ($passeios->result() as $passeio) {
                                echo "<option value = '" . $passeio->id . "'>" . $passeio->nome . " | " . $passeio->cidade . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <input type="hidden" name="idCliente" />

            <div class="col-sm-6">
                <div class="form-group">
                    <button class="btn btn-icon bgm-green m-b-40" ><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
                </div>
            </div>

            <?php echo form_close() ?>
        </div>
    </div>

    <div id="lista-de-hoteis-cadastrados-no-tour">
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
                        echo "<tr>";
                        echo "<td>" . $passeio->nome . "</td>";
                        echo "<td>" . $passeio->telefone . "</td>";
                        echo "<td>" . $passeio->email . "</td>";
                        echo "<td>" . $passeio->responsavel . "</td>";
                        echo "<td>" . $passeio->endereco . "</td>";
                        echo "<td>" . $passeio->cidade . "</td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>