<div class="pmbb-body card-padding">
    <div class="form-wizard-basic fw-container">
        <ul class="tab-nav text-center" data-tab-color="green">
            <li class="active"><a href="#hotelTour" data-toggle="tab"><i class="zmdi zmdi-hotel"></i> Hotel</a></li>
            <li><a href="#passeioTour" data-toggle="tab"><i class="zmdi zmdi-nature-people"></i> Passeio</a></li>
            <li><a href="#transporteTour" data-toggle="tab"><i class="zmdi zmdi-car"></i> Transporte</a></li>
            <li><a href="#guiaTour" data-toggle="tab"><i class="zmdi zmdi-face"></i> Guia</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active in" id="hotelTour">
                <?php include "tourIndividual/hotelTour.php"; ?>
            </div>
            <div class="tab-pane fade" id="passeioTour">
                <?php include "tourIndividual/passeioTour.php"; ?>
            </div>
            <div class="tab-pane fade" id="transporteTour">
                <?php include "tourIndividual/transporteTour.php"; ?>
            </div>
            <div class="tab-pane fade" id="guiaTour">
                <?php include "tourIndividual/guiaTour.php"; ?>
            </div>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="jumbotron text-center">
        <div class="right color c-green">
            <h2>Total do tour R$ <span id="valor-total-do-tour"></span></h2>
        </div>
    </div>
    <div class="btn-demo col">
        <div class="col-lg-1">
            <button class="btn btn-info btn-icon waves-effect waves-circle waves-float" onclick="email.enviarTour('<?php echo $cliente->email; ?>')"><i class="zmdi zmdi-mail-send"></i></button>
        </div>
        <div class="col-lg-1">
            <button class="btn btn-primary btn-icon btn-warning waves-effect waves-circle waves-float" onclick="perfilCliente.prepararArquivoTourPDF('tourIndividual')"><i class="zmdi zmdi-print"></i></button>
        </div>
        <div class="col-lg-1">
            <form id="form_tourIndividual" action="<?php echo base_url() . "index.php/tarefa/gerarPDF"; ?>" method="post" accept-charset="utf-8">
                <input id="nome_tourIndividual" name="nome" type="hidden" />
                <input id="html_tourIndividual" name="html" type="hidden" />
            </form>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.datepicker').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });
</script>

<div class="corpo-do-tour-individual" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 pull-left">
                <div class="text-center">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/logo-pequena.png" alt="">
                </div>
                <h3 class="text-center">Tour Individual</h3>
                <div class="text-center">
                    <div class="p-25">
                        <div class="col-md-12">
                            <div class="text-center">
                                <br><br>
                                <div style="font-size: 12pt">
                                    Rua Autonomista 1070, CEP 79022-490 Campo Grande, Mato Grosso do Sul/Brasil<br><br>

                                    <strong>Tel.</strong> 055/67-3014-9449 / 055/67-99987-1191
                                    <strong>e-mail:</strong> info@gopantanal.com/pantanal@gmx.net <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="col-md-4">
                                <div class="text-right">
                                    <h4>Von</h4>
                                    <h4>Martin Arn</h4>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="i-to">
                                    <h4>Nach</h4>
                                    <h4><?php echo $cliente->nome; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 pull-left">
                <div class="col-md-12 table-responsive">
                    <h4>Hotéis</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Cidade</th>
                                <th>Entrada</th>
                                <th>Saída</th>
                                <th>Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            setlocale(LC_MONETARY, 'nl_NL.UTF-8');
                            foreach ($hoteisTour->result() as $hotel) {
                                echo "<tr>";
                                echo "<td>" . $hotel->nome . "</td>";
                                echo "<td>" . $hotel->cidade . "</td>";
                                echo "<td>" . $hotel->data_ini . "</td>";
                                echo "<td>" . $hotel->data_fim . "</td>";
                                echo "<td>" . money_format('%(#1n', $hotel->preco) . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-8 pull-left">
                <div class="col-md-12 table-responsive">
                    <h4>Passeio</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Cidade</th>
                                <th>Entrada</th>
                                <th>Saída</th>
                                <th>Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($passeiosTour->result() as $passeio) {
                                setlocale(LC_MONETARY, 'nl_NL.UTF-8');
                                echo "<tr id='linha-do-passeio-" . $passeio->id . "'>";
                                echo "<td>" . $passeio->nome . "</td>";
                                echo "<td>" . $passeio->cidade . "</td>";
                                echo "<td>" . $passeio->data_ini . "</td>";
                                echo "<td>" . $passeio->data_fim . "</td>";
                                echo "<td>" . money_format('%(#1n', $passeio->preco) . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-8 pull-left">
                <div class="col-md-12 table-responsive">
                    <h4>Transporte</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Cidade</th>
                                <th>Entrada</th>
                                <th>Saída</th>
                                <th>Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($transportesTour->result() as $transporte) {
                                setlocale(LC_MONETARY, 'nl_NL.UTF-8');
                                echo "<tr id='linha-do-passeio-" . $transporte->id . "'>";
                                echo "<td>" . $transporte->nome . "</td>";
                                echo "<td>" . $transporte->cidade . "</td>";
                                echo "<td>" . $transporte->data_ini . "</td>";
                                echo "<td>" . $transporte->data_fim . "</td>";
                                echo "<td>" . money_format('%(#1n', $transporte->preco) . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-8 pull-left">
                <div class="col-md-12 table-responsive">
                    <h4>Guia</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Cidade</th>
                                <th>Entrada</th>
                                <th>Saída</th>
                                <th>Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($guiasTour->result() as $guia) {
                                setlocale(LC_MONETARY, 'nl_NL.UTF-8');
                                echo "<tr id='linha-do-passeio-" . $guia->id . "'>";
                                echo "<td>" . $guia->nome . "</td>";
                                echo "<td>" . $guia->cidade . "</td>";
                                echo "<td>" . $guia->data_ini . "</td>";
                                echo "<td>" . $guia->data_fim . "</td>";
                                echo "<td>" . money_format('%(#1n', $guia->preco) . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-8 pull-left">
                <div class="text-center">
                    <div class="p-25">
                        <div class="col-md-12">
                            <label for="preis-total-impressao"> Preis Total </label>
                            <h4><span id="preis-total-impressao" class="bg-success"><span/></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 pull-left">
                <p class="text-center c-black">Campo Grande/MS,
                    <?php
                    date_default_timezone_set('Europe/Amsterdam');
                    echo date('d F Y');
                    ?>
                    <br> Martin Arn
                </p>
                <ul class="list-inline text-center">
                    <li class="m-l-5 m-r-5">BRAZIL PANTANAL TOUR, CNPJ 17.912.824/0001-30, INSCR. MUN. 0018051400-7</li><br>
                    <li class="m-l-5 m-r-5">CADASTUR 12.063837.10.0001-0</li>

                </ul>
            </div>
        </div>
    </div>
</div>
</div>