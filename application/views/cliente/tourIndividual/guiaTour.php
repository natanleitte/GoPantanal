<div id="hoteis">
    <div id="lista-de-hoteis">
        <div class="row">
            <?php echo form_open(base_url() . 'index.php/tourIndividual/adicionarHotel'); ?>                                    
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="hoteis" class="control-label">Selecione um Guia com seu respectivo valor</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-face"></i></span>
                        <select id="guias" name="guia" class="form-control" placeholder="Guias">
                            <?php
                            foreach ($guias->result() as $guia) {
                                echo "<option value = '" . $guia->id . "'>" . $guia->nome . " | " . $guia->cidade . "</option>";
                            }
                            ?>
                        </select>
                        <span class="input-group-addon"><i class="zmdi zmdi-money-box"></i></span>
                        <div class="fg-line">
                            <input type="text" id="valor-guia" name="valor" class="form-control monetario" placeholder="Valor($)">
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
            <div class="col-sm-6">
                <div class="form-group">
                    <button class="btn btn-icon bgm-green m-b-40" onclick="tour.inserirGuia()"><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
                </div>
            </div>

        </div>
    </div>

    <div class="table-responsive">
        <table id="data-table-basic" class="table table-striped js-guias-tour-individual" style="font-size: small">
            <thead>
                <tr>
                    <th data-column-id="sender">Preço</th>
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
                foreach ($guiasTour->result() as $guia) {
                    echo "<tr id='linha-do-guia-" . $guia->id . "'>";
                    echo "<td>" . money_format('%.2n', $guia->preco) . "</td>";
                    echo "<td>" . $guia->nome . "</td>";
                    echo "<td>" . $guia->idioma . "</td>";
                    echo "<td>" . $guia->telefone . "</td>";
                    echo "<td>" . $guia->email . "</td>";
                    echo "<td>" . $guia->responsavel . "</td>";
                    echo "<td>" . $guia->endereco . "</td>";
                    echo "<td>" . $guia->cidade . "</td>";
                    echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirGuia(" . $guia->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>