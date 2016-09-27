<script type="text/javascript">
    $(function () {
        $('#data').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });
</script>
<div class="row m-t-25 p-0 m-b-25 text-center">
    <div class="col-xs-4">
        <div class="brd-2 p-15">
            <div class="c-black m-b-5"><b>Reise Termin von bis</b></div>
            <form>
                <div class='input-group date' id='datepicker-fim'>
                    <span class="input-group-addon">
                        <input id="input-data-fim" type='text' class="form-control input-group-addon m-0 f-500" placeholder="Inicio do Tour" />
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="brd-2 p-15">
            <div class="c-black m-b-5"><b>Preis pro Person</b></div>
            <form>
                <div class='input-group'>
                    <span class="input-group-addon">
                        <input id="valor" type='text' class="form-control input-group-addon m-0 f-500" placeholder="Valor ($)" />
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="brd-2 p-15">
            <div class="c-black m-b-5"><b>Preis Total</b></div>
            <form>
                <div class='input-group'>
                    <span class="input-group-addon">
                        <input id="valor" type='text' class="form-control input-group-addon m-0 f-500" placeholder="Valor ($)" />
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