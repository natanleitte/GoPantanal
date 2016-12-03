<div id="hoteis">
    <div id="lista-de-hoteis">
        <div class="row">
            <?php echo form_open(); ?>                                    
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="hoteis" class="control-label">Selecione um Hotel</label>
                    <div class="select">
                        <select id="hoteis" name="hotel" class="form-control" placeholder="Hotéis">
                            <?php
                            foreach ($hoteis->result() as $hotel) {
                                echo "<option value = '" . $hotel->id . "'>" . $hotel->nome . " | " . $hotel->cidade . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <button class="btn btn-icon bgm-green m-b-40" onclick="tour.inserirHotel()"><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
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
                    foreach ($hoteisTour->result() as $hotel) {
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
</div>