<div id="hoteis">
    <div id="lista-de-hoteis">
        <div class="row">
            <?php echo form_open(base_url() . 'index.php/tourIndividual/adicionarHotel'); ?>                                    
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="transporte" class="control-label">Selecione um Transporte com seu respectivo valor</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-car"></i></span>
                        <select id="transportes" name="transporte" class="form-control" placeholder="Transportes">
                            <?php
                            foreach ($transportes->result() as $transporte) {
                                echo "<option value = '" . $transporte->id . "'>" . $transporte->nome . " | " . $transporte->cidade . "</option>";
                            }
                            ?>
                        </select>
                        <span class="input-group-addon"><i class="zmdi zmdi-money-box"></i></span>
                        <div class="fg-line">
                            <input type="text" id="valor-transporte" name="valor" class="form-control" placeholder="Valor($)">
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
            <div class="col-sm-6">
                <div class="form-group">
                    <button class="btn btn-icon bgm-green m-b-40" onclick="tour.inserirTransporte()"><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
                </div>
            </div>

        </div>
    </div>

    <div class="table-responsive">
        <table id="data-table-basic" class="table table-striped js-transportes-tour-individual">
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
                foreach ($transportesTour->result() as $transporte) {
                    echo "<tr id='linha-do-transporte-" . $transporte->id . "'>";
                    echo "<td>" . $transporte->nome . "</td>";
                    echo "<td>" . $transporte->telefone . "</td>";
                    echo "<td>" . $transporte->email . "</td>";
                    echo "<td>" . $transporte->responsavel . "</td>";
                    echo "<td>" . $transporte->endereco . "</td>";
                    echo "<td>" . $transporte->cidade . "</td>";
                    echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirTransporte(" . $transporte->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>