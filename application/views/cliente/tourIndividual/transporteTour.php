<div id="cadastro-de-transportes">
    <div id="lista-de-transporte">
        <label for="transporte" class="control-label">Selecione um Transporte com seu respectivo valor</label>
        <div class="row">
            <div class="col-sm-4">
                <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-face"></i></span>
                    <div class="fg-line">
                        <select id="transportes" name="transporte" class="form-control" placeholder="Transportes">
                            <?php
                            foreach ($transportes->result() as $transporte) {
                                echo "<option value = '" . $transporte->id . "'>" . $transporte->nome . " | " . $transporte->cidade . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-money-box"></i></span>
                    <div class="fg-line">
                        <input type="text" id="valor-transporte" name="valor" class="form-control monetario">
                        <label class="fg-label">Valor($)</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon input-group-sm"><i class="zmdi zmdi-calendar-alt"></i></span>
                    <div class="fg-line">
                        <input type="text" id="data-ini-transporte" name="data-ini" class="form-control datepicker">
                        <label class="fg-label">Data de Inicio</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon input-group-sm"><i class="zmdi zmdi-calendar-alt"></i></span>
                    <div class="fg-line">
                        <input type="text" id="data-fim-transporte" name="data-fim" class="form-control datepicker">
                        <label class="fg-label">Data Final</label>
                    </div>
                </div>
            </div>
            <div class="input-group-addon">
                <button onclick="tour.inserirTransporte()" class="btn btn-icon bgm-green m-b-40 form-group"><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
            </div>
        </div>
    </div>
    <div class="lista-de-transportes-cadastrados-no-tour">
        <table id="data-table-basic" class="table table-striped js-transporte-tour-individual" style="font-size: small">
            <thead>
                <tr>
                    <th data-column-id="preco">Preço</th>
                    <th data-column-id="nome">Nome</th>
                    <th data-column-id="cidade">Cidade</th>
                    <th data-column-id="inicio">Data de Inicio</th>
                    <th data-column-id="fim" data-order="desc">Data Final</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($transportesTour->result() as $transporte) {
                    echo "<tr id='linha-do-transporte-" . $transporte->id . "'>";
                        echo "<td>" . money_format('%.2n', $transporte->preco) . "</td>";
                        echo "<td>" . $transporte->nome . "</td>";
                        echo "<td>" . $transporte->cidade . "</td>";
                        echo "<td>" . $transporte->data_ini . "</td>";
                        echo "<td>" . $transporte->data_fim . "</td>";
                    echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirTransporte(" . $transporte->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>