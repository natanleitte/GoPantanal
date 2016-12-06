<div id="hoteis">
    <div id="lista-de-hoteis">
        <div class="row">
            <?php echo form_open(); ?>                                    
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="hoteis" class="control-label">Selecione um Hotel com seu respectivo valor</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="zmdi zmdi-hotel"></i></span>
                        <select id="hoteis" name="hotel" class="form-control" placeholder="Hotéis">
                            <?php
                            foreach ($hoteis->result() as $hotel) {
                                echo "<option value = '" . $hotel->id . "'>" . $hotel->nome . " | " . $hotel->cidade . "</option>";
                            }
                            ?>
                        </select>
                        <span class="input-group-addon"><i class="zmdi zmdi-money-box"></i></span>
                        <div class="fg-line">
                            <input type="text" id="valor-hotel" name="valor" class="form-control" placeholder="Valor($)">
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>

            <div class="col-sm-6">
                <div class="form-group">
                    <button class="btn btn-icon bgm-green m-b-40" onclick="tour.inserirHotel()"><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div id="lista-de-hoteis-cadastrados-no-tour">
        <div class="table-responsive">
            <table id="data-table-basic" class="table table-striped js-hoteis-tour-individual">
                <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric">Nome</th>
                        <th data-column-id="sender">Telefone</th>
                        <th data-column-id="received" data-order="desc">Email</th>
                        <th data-column-id="sender">Responsável</th>
                        <th data-column-id="sender">Endereço</th>
                        <th data-column-id="sender">Cidade</th>
                        <th data-column-id="sender">Conta</th>
                        <th data-column-id="sender">Agência</th>
                        <th data-column-id="sender">Banco</th>
                        <th data-column-id="sender">Titular</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($hoteisTour->result() as $hotel) {
                        echo "<tr id='linha-do-hotel-" . $hotel->id . "'>";
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
                        echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirHotel(" . $hotel->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>