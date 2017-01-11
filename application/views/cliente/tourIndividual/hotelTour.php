<div id="cadastro-de-hoteis">
    <div id="lista-de-hoteis">
        <label for="hoteis" class="control-label">Selecione um Hotel com seu respectivo valor</label>
        <div class="row">
            <div class="col-sm-4">
                <div class="input-group fg-float">
                    <span class="input-group-addon"><i class="zmdi zmdi-face"></i></span>
                    <div class="fg-line">
                        <select id="hoteis" name="hotel" class="form-control" placeholder="Hotel">
                            <?php
                            foreach ($hoteis->result() as $hotel) {
                                echo "<option value = '" . $hotel->id . "'>" . $hotel->nome . " | " . $hotel->cidade . "</option>";
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
                        <input type="text" id="valor-hotel" name="valor" class="form-control monetario">
                        <label class="fg-label">Valor($)</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon input-group-sm"><i class="zmdi zmdi-calendar-alt"></i></span>
                    <div class="fg-line">
                        <input type="text" id="data-ini-hotel" name="data-ini" class="form-control datepicker">
                        <label class="fg-label">Data de Inicio</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group fg-float">
                    <span class="input-group-addon input-group-sm"><i class="zmdi zmdi-calendar-alt"></i></span>
                    <div class="fg-line">
                        <input type="text" id="data-fim-hotel" name="data-fim" class="form-control datepicker">
                        <label class="fg-label">Data Final</label>
                    </div>
                </div>
            </div>
            <div class="input-group-addon">
                <button onclick="tour.inserirHotel()" class="btn btn-icon bgm-green m-b-40 form-group"><i class="zmdi zmdi-plus-circle zmdi-"></i></button>
            </div>
        </div>
    </div>

    <div id="lista-de-hoteis-cadastrados-no-tour">
        <div class="table-responsive">
            <table id="tabela-de-hoteis" class="table table-striped js-hotel-tour-individual" style="font-size: small">
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
                    setlocale(LC_MONETARY, 'pt_BR.UTF-8');
                    foreach ($hoteisTour->result() as $hotel) {
                        echo "<tr id='linha-do-hotel-" . $hotel->id . "'>";
                        echo "<td>" . money_format('%.2n', $hotel->preco) . "</td>";
                        echo "<td>" . $hotel->nome . "</td>";
                        echo "<td>" . $hotel->cidade . "</td>";
                        echo "<td>" . $hotel->data_ini . "</td>";
                        echo "<td>" . $hotel->data_fim . "</td>";
                        echo "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirHotel(" . $hotel->id . ")'><span class='zmdi zmdi-delete'></span></button></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>