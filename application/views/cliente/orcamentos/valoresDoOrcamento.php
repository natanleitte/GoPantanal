<script type="text/javascript">
    $(function () {
        $('#data').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });
</script>
<div class="row m-t-25 p-0 m-b-25">
    <div class="col-xs-3">
        <div class="bgm-blue brd-2 p-15">
            <div class="c-white m-b-5"><b>Datum</b></div>
            <form>
                <div class='input-group date' id='datepicker-inicio'>
                    <span class="input-group-addon">
                        <input id="input-data-inicio" type='text' class="form-control input-group-addon m-0 f-500 c-white " placeholder="Inicio do Tour" />
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="bgm-green brd-2 p-15">
            <div class="c-white m-b-5"><b>Datenausgabe</b></div>
            <form>
                <div class='input-group date' id='datepicker-fim'>
                    <span class="input-group-addon">
                        <input id="input-data-fim" type='text' class="form-control input-group-addon m-0 f-500  c-white " placeholder="Inicio do Tour" />
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="bgm-red brd-2 p-15">
            <div class="c-white m-b-5"><b>Preis (Euro/Person)</b></div>
            <form>
                <div class='input-group'>
                    <span class="input-group-addon">
                        <input id="valor" type='text' class="form-control input-group-addon m-0  c-white f-500" placeholder="Valor ($)" />
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="bgm-red brd-2 p-15">
            <div class="c-white m-b-5"><b>Gesamt</b></div>
            <form>
                <div class='input-group'>
                    <span class="input-group-addon">
                        <input id="valor" type='text' class="form-control input-group-addon m-0  c-white f-500" placeholder="Valor ($)" />
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#datepicker-inicio, #datepicker-fim').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });
</script>