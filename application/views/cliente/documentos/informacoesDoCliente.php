<div class="text-center">
    <div class="p-25">
        <div class="col-xs-12">
            <div class="text-center">
                <br><br>
                <div style="font-size: 12pt">
                    Rua Autonomista 1070, CEP 79022-490
                    Campo Grande, Mato Grosso do Sul/Brasil<br><br>

                    <strong>Tel.</strong> 055/67-3014-9449 / 055/67-99987-1191 
                    <strong>e-mail:</strong> info@gopantanal.com/pantanal@gmx.net <br><br>
                </div>
            </div>
        </div>
        <div class="col-xs-12">

            <div class="col-xs-3">
                <div class="bgm-white brd-2 p-15">
                    <div class="c-black m-b-5 text-center"><b>Datum</b></div>
                    <form>
                        <div class='input-group date' id='datepicker-inicio'>
                            <span class="input-group-addon">
                                <input id="input-data-inicio" type='text' class="js-input-data-inicio form-control input-group-addon m-0 f-500 c-black datepicker" placeholder="Datum" />
                            </span>
                        </div>
                        <script>
                            $(document).ready(function () {
                                var d = new Date();
                                var strDate = d.getDate() + "/" + (d.getMonth() + 1) + "/" + d.getFullYear();
                                $('.js-input-data-inicio').val(strDate);
                            });
                        </script>
                    </form>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="text-right">
                    <h4>Von</h4>
                    <h4>Martin Arn</h4>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="i-to">
                    <h4>Nach</h4>
                    <h4><?php echo $cliente->nome; ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>