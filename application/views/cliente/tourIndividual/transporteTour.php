<div id="hoteis">
    <div id="lista-de-hoteis">
        <div class="row">
            <?php echo form_open(base_url() . 'index.php/tourIndividual/adicionarHotel'); ?>                                    
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="hoteis" class="control-label">Selecione um Transporte</label>
                    <div class="select">
                        <select id="hoteis" name="hotel" class="form-control" placeholder="Hotéis">
                            <?php
                            foreach ($transportes->result() as $transporte) {
                                echo "<option value = '" . $transporte->id . "'>" . $transporte->nome . " | " . $transporte->cidade . "</option>";
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
                    echo "<tr>";
                    echo "<td>" . $transporte->nome . "</td>";
                    echo "<td>" . $transporte->telefone . "</td>";
                    echo "<td>" . $transporte->email . "</td>";
                    echo "<td>" . $transporte->responsavel . "</td>";
                    echo "<td>" . $transporte->endereco . "</td>";
                    echo "<td>" . $transporte->cidade . "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>