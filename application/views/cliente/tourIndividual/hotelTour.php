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
                            <input type="text" id="valor-hotel" name="valor" class="form-control monetario" placeholder="Valor($)">
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
            <table id="tabela-de-hoteis" class="table table-striped js-hoteis-tour-individual" style="font-size: small">
                <thead>
                    <tr>
                        <th data-column-id="preco">Preço</th>
                        <th data-column-id="id" data-type="numeric">Nome</th>
                        <th data-column-id="telefone">Telefone</th>
                        <th data-column-id="email" data-order="desc">Email</th>
                        <th data-column-id="responsavel">Responsável</th>
                        <th data-column-id="endereco">Endereço</th>
                        <th data-column-id="cidade">Cidade</th>
                        <th data-column-id="conta">Conta</th>
                        <th data-column-id="agencia">Agência</th>
                        <th data-column-id="banco">Banco</th>
                        <th data-column-id="titular">Titular</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    setlocale(LC_MONETARY, 'pt_BR.UTF-8');
                    foreach ($hoteisTour->result() as $hotel) {
                        echo "<tr id='linha-do-hotel-" . $hotel->id . "'>";
                        echo "<td>" . money_format('%.2n', $hotel->preco) . "</td>";
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