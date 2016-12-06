
<footer id="footer">
    Copyright &copy; 2015 GoPantanal Admin

    <ul class="f-menu">
        <li><a href="<?php echo base_url() ?>">Home</a></li>
        <li><a href="<?php echo base_url() ?>index.php/cliente">Clientes</a></li>
        <li><a href="<?php echo base_url() ?>index.php/agenda">Agenda</a></li>
        <li><a href="<?php echo base_url() ?>index.php/tarefa">Tarefas</a></li>
        <li><a href="<?php echo base_url() ?>index.php/mail">E-mail</a></li>
        <li><a href="<?php echo base_url() ?>index.php/hotel">Hotel</a></li>
        <li><a href="<?php echo base_url() ?>index.php/transporte">Transporte</a></li>
        <li><a href="<?php echo base_url() ?>index.php/passeio">Passeio</a></li>
        <li><a href="<?php echo base_url() ?>index.php/guia">Guia</a></li>
    </ul>
</footer>

<!-- Page Loader -->
<div class="page-loader">
    <div class="preloader pls-blue">
        <svg class="pl-circular" viewBox="25 25 50 50">
        <circle class="plc-path" cx="50" cy="50" r="20" />
        </svg>

        <p>Please wait...</p>
    </div>
</div>

<!-- Javascript Libraries -->
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/flot/jquery.flot.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/sparklines/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/summernote/dist/summernote-updated.min.js"></script>


<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/fileinput/fileinput.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/input-mask/input-mask.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/farbtastic/farbtastic.min.js"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
    <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="<?php echo base_url() . "assets/" ?>vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/flot-charts/curved-line-chart.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/flot-charts/line-chart.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/charts.js"></script>

<script src="<?php echo base_url() . "assets/" ?>js/charts.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/functions.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/tarefa.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/perfilCliente.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/demo.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/tour/tourIndividual.js"></script>

<!-- MONEY_MASK -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . "assets/" ?>js/jquery.maskMoney.min.js"></script>


<!--Altera linguagem do calendário-->
<script src='<?php echo base_url() . "assets/" ?>vendors/bower_components/fullcalendar/dist/lang/pt-br.js'></script>


<script>
    $('.monetario').maskMoney({
        prefix: 'R$',
        allowZero: true,
        thousands: '.',
        decimal: ',',
        affixesStay: true
    });

    $('.decimal-duas-casas').inputmask("Regex", {regex: "[0-9]{0,10}[,]{1,1}[0-9]{0,3}"});

    perfilCliente.inserirUrl('<?= base_url(); ?>');
</script>


</body>
</html>