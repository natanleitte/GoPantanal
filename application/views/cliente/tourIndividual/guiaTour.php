<div id="hoteis">
    <div id="lista-de-hoteis">
        <div class="row">
            <?php echo form_open(base_url() . 'index.php/tourIndividual/adicionarHotel'); ?>                                    
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="hoteis" class="control-label">Selecione um Guia</label>
                    <div class="select">
                        <select id="hoteis" name="hotel" class="form-control" placeholder="Hotéis">
                            <?php
                            foreach ($guias->result() as $guia) {
                                echo "<option value = '" . $guia->id . "'>" . $guia->nome . " | " . $guia->cidade . "</option>";
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
                            <th data-column-id="sender">Idioma</th>
                            <th data-column-id="sender">Telefone</th>
                            <th data-column-id="received" data-order="desc">Email</th>
                            <th data-column-id="sender">Responsável</th>
                            <th data-column-id="sender">Endereço</th>
                            <th data-column-id="sender">Cidade</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($guias->result() as $guia) {
                            echo "<tr>";
                            echo "<td>" . $guia->nome . "</td>";
                            echo "<td>" . $guia->idioma . "</td>";
                            echo "<td>" . $guia->telefone . "</td>";
                            echo "<td>" . $guia->email . "</td>";
                            echo "<td>" . $guia->responsavel . "</td>";
                            echo "<td>" . $guia->endereco . "</td>";
                            echo "<td>" . $guia->cidade . "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>