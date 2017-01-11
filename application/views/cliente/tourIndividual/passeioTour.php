<div id="cadastro-de-passeio">
    <div id="lista-de-passeios">
        <label for="passeio" class="control-label">Selecione um Passeio com seu respectivo valor</label>
        <div class="row">
            <div class="col-sm-4">
                <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-face"></i></span>
                    <div class="fg-line">
                        <select id="passeios" name="passeio" class="form-control" placeholder="Passeios">
                            <?php
                            foreach ($passeios->result() as $passeio) {
                                echo "<option value = '" . $passeio->id . "'>" . $passeio->nome . " | " . $passeio->cidade . "</option>";
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
                        <input type="text" id="valor-passeio" name="valor" class="form-control monetario">
                        <label class="fg-label">Valor($)</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon input-group-sm"><i class="zmdi zmdi-calendar-alt"></i></span>
                    <div class="fg-line">
                        <input type="text" id="data-ini-passeio" name="data-ini" class="form-control datepicker">
                        <label class="fg-label">Data de Inicio</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon input-group-sm"><i class="zmdi zmdi-calendar-alt"></i></span>
                    <div class="fg-line">
                        <input type="text" id="data-fim-passeio" name="data-fim" class="form-control datepicker">
                        <label class="fg-label">Data Final</label>
                    </div>
                </div>
            </div>
            <div class="input-group-addon">
                <button onclick="tour.inserirPasseio()" class="btn btn-icon bgm-green m-b-40 form-group"><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
            </div>
        </div>
    </div>

    <div id="lista-de-passeios-cadastrados-no-tour">
        <div class="table-responsive">
            <table id="data-table-basic" class="table table-striped js-passeio-tour-individual" style="font-size: small">
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
                    foreach ($passeiosTour->result() as $passeio) {
                        echo "<tr id='linha-do-passeio-" . $passeio->id . "'>";
                        echo "<td>" . money_format('%.2n', $passeio->preco) . "</td>";
                        echo "<td>" . $passeio->nome . "</td>";
                        echo "<td>" . $passeio->cidade . "</td>";
                        echo "<td>" . $passeio->data_ini . "</td>";
                        echo "<td>" . $passeio->data_fim . "</td>";
                        echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirPasseio(" . $passeio->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>