<div class="card card-orcamento rechnung">

    <div class="card-header ch-alt text-center">
        <img class="i-logo" src="<?php echo base_url(); ?>assets/img/logo-grande.png" alt="">
    </div>

    <?php include "informacoesDoCliente.php"; ?>

    <div class="clearfix"></div>

    <div class="row m-t-25 p-0 m-b-25 text-center">
        <div class="col-xs-4">
            <div class="brd-2 p-15">
                <div class="c-black m-b-5"><b>Rechnungsnummer</b></div>
                <form>
                    <div class='input-group' id='datepicker-fim'>
                        <span class="input-group-addon">
                            <input id="input-data-fim" type='text' class="form-control input-group-addon m-0 f-500" placeholder="Rechnungsnummer" />
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="brd-2 p-15">
                <div class="c-black m-b-5"><b>Anzahlung 30% Euro/USD</b></div>
                <form>
                    <div class='input-group'>
                        <span class="input-group-addon">
                            <input id="valor" type='text' class="form-control input-group-addon m-0 f-500" placeholder="Anzahlung 30% Euro/USD" />
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="brd-2 p-15">
                <div class="c-black m-b-5"><b>Restbetrag Euro/USD zu bezahlen bis</b></div>
                <form>
                    <div class='input-group'>
                        <span class="input-group-addon">
                            <input id="valor" type='text' class="form-control input-group-addon m-0 f-500" placeholder="Restbetrag Euro/USD zu bezahlen bis" />
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="card-body card-padding">
        <div class="row">
            <div class="text-center">
                <h3 class="c-green">Rechnung</h3>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="col-xs-6">
                <div class="text-right form-inline">
                    <h4>Reisedatum: 
                        <input type='text' class="form-control input-group-addon m-0 f-700" placeholder="Reisedatum" />
                    </h4>
                </div>
                <div class="text-right form-inline">
                    <h4>Tour: 
                        <input type='text' class="form-control input-group-addon m-0 f-500" placeholder="Tour" />
                    </h4>
                </div>
                <div class="text-right form-inline">
                    <h4>Anmerkungen: 
                        <input type='text' class="form-control input-group-addon m-0 f-500" placeholder="Anmerkungen" />
                    </h4>
                </div>
            </div>

            <div class="col-xs-6">
                <div class="i-to">
                    <h4>Daten zur Banküberweisung:<br> 
                        Postfinance<br>
                        Kontonummer: 25-546648-6<br>
                        IBAN: Ch5609000000255466486<br>
                        BIC/BLZ POFICHBEXXX<br>
                        Martin Arn<br>
                        Riedhosfstrasse 366<br>
                        8049 Zürich<br>
                    </h4>
                </div>
            </div>
        </div>

        <div class="p-25">
            <h4 class="c-black f-400">Rücktrittsbestimmungen</h4>
            <p>Bei Rücktrittserklärung iher gebuchten Tor, informieren sie uns bitte umgehend per e-mail an
                folgende Adressen <strong>info@gopantanal.com</strong> or <strong>pantanal@gmx.net</strong>. Das
                Eingangsdatum ihrer Rücktrittserklärung ist ausschlaggebend für die Stornierungsgebühren.</p>
            <br/>
            <div class="col-xs-6">
                <div class="i-to">
                    <h4>bis 60 Tage vor Reisebeginn<br> 
                        59-30 Tage vor Reisebeginn<br>
                        29-7 Tage vor Reisebeginn<br>
                        6-0 Tage vor Reisebeggin<br>
                    </h4>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="i-to">
                    <h4>50% der Anzahlung<br> 
                        75% der Anzahlung<br>
                        100% der Anzahlung<br>
                        75% des Gesamtbetrages<br>
                    </h4>
                </div>
            </div>
            <br>
            <br>

        </div>
        <?php include "rodape.php"; ?>
    </div>