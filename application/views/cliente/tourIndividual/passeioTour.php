<div id="hoteis">
    <div id="lista-de-hoteis">
        <div class="row">
            <?php echo form_open(); ?>                                    
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="passeios" class="control-label">Selecione um Passeio com seu respectivo valor</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-nature-people"></i></span>
                        <select id="passeios" name="passeios" class="form-control" placeholder="Passeios">
                            <?php
                            foreach ($passeios->result() as $passeio) {
                                echo "<option value = '" . $passeio->id . "'>" . $passeio->nome . " | " . $passeio->cidade . "</option>";
                            }
                            ?>
                        </select>
                        <span class="input-group-addon"><i class="zmdi zmdi-money-box"></i></span>
                        <div class="fg-line">
                            <input type="text" id="valor-passeio" name="valor" class="form-control monetario" placeholder="Valor($)">
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>

            <div class="col-sm-6">
                <div class="form-group">
                    <button class="btn btn-icon bgm-green m-b-40" onclick="tour.inserirPasseio()"><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
                </div>
            </div>

        </div>
    </div>

    <div id="lista-de-hoteis-cadastrados-no-tour">
        <div class="table-responsive">
            <table id="data-table-basic" class="table table-striped js-passeios-tour-individual" style="font-size: small">
                <thead>
                    <tr>
                        <th data-column-id="sender">Preço</th>
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
                    foreach ($passeiosTour->result() as $passeio) {
                        echo "<tr id='linha-do-passeio-" . $passeio->id . "'>";
                        echo "<td>" . money_format('%.2n', $passeio->preco) . "</td>";
                        echo "<td>" . $passeio->nome . "</td>";
                        echo "<td>" . $passeio->telefone . "</td>";
                        echo "<td>" . $passeio->email . "</td>";
                        echo "<td>" . $passeio->responsavel . "</td>";
                        echo "<td>" . $passeio->endereco . "</td>";
                        echo "<td>" . $passeio->cidade . "</td>";
                        echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirPasseio(" . $passeio->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>