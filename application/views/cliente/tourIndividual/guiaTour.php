<div id="cadastro-de-guias">
    <div id="lista-de-guias">
        <label for="guias" class="control-label">Selecione um Guia com seu respectivo valor</label>
        <div class="row">
            <div class="col-sm-4">
                <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-face"></i></span>
                    <div class="fg-line">
                        <select id="guias" name="guia" class="form-control" placeholder="Guias">
                            <?php
                            foreach ($guias->result() as $guia) {
                                echo "<option value = '" . $guia->id . "'>" . $guia->nome . " | " . $guia->cidade . "</option>";
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
                        <input type="text" id="valor-guia" name="valor" class="form-control monetario">
                        <label class="fg-label">Valor($)</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon input-group-sm"><i class="zmdi zmdi-calendar-alt"></i></span>
                    <div class="fg-line">
                        <input type="text" id="data-ini-guia" name="data-ini" class="form-control datepicker">
                        <label class="fg-label">Data de Inicio</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon input-group-sm"><i class="zmdi zmdi-calendar-alt"></i></span>
                    <div class="fg-line">
                        <input type="text" id="data-fim-guia" name="data-fim" class="form-control datepicker">
                        <label class="fg-label">Data Final</label>
                    </div>
                </div>
            </div>
            <div class="input-group-addon">
                <button onclick="tour.inserirGuia()" class="btn btn-icon bgm-green m-b-40 form-group"><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
            </div>
        </div>
    </div>

    <div id="lista-de-guias-cadastrados-no-tour">
        <div class="table-responsive">
            <table id="data-table-basic" class="table table-striped js-guia-tour-individual" style="font-size: small">
                <thead>
                    <tr>
                        <th data-column-id="preco">Preço</th>
                        <th data-column-id="nome">Nome</th>
                        <th data-column-id="cidade">Cidade</th>
                        <th data-column-id="inicio">Data de Inicio</th>
                        <th data-column-id="fim" data-order="desc">Fata Final</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($guiasTour->result() as $guia) {
                        echo "<tr id='linha-do-guia-" . $guia->id . "'>";
                        echo "<td>" . money_format('%.2n', $guia->preco) . "</td>";
                        echo "<td>" . $guia->nome . "</td>";
                        echo "<td>" . $guia->cidade . "</td>";
                        echo "<td>" . $guia->data_ini . "</td>";
                        echo "<td>" . $guia->data_fim . "</td>";
                        echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirGuia(" . $guia->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>