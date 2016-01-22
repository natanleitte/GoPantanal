
<footer id="footer">
    Copyright &copy; 2015 GoPantanal Admin

    <ul class="f-menu">
        <li><a href="">Home</a></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Reports</a></li>
        <li><a href="">Support</a></li>
        <li><a href="">Contact</a></li>
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

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
    <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="<?php echo base_url() . "assets/" ?>js/flot-charts/curved-line-chart.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/flot-charts/line-chart.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/charts.js"></script>

<script src="<?php echo base_url() . "assets/" ?>js/charts.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/functions.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/demo.js"></script>

<!--Altera linguagem do calendário-->
<script src='<?php echo base_url() . "assets/" ?>vendors/bower_components/fullcalendar/dist/lang/pt-br.js'></script>

<script type="text/javascript">

    $(document).ready(function () {
        $("#busca").keyup(function () {
//            alert("Handler for .keyup() called.");
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/cliente/buscaCliente',
            type: 'POST',
            datatype: 'json',
            data: {query: $("#busca").val()},
            success: function (data) {
//                for($i=0; $i < data.length; $i++){
                console.log(data.nome);
            
//            }//fim do laço
                
//                swal("Cliente inserido com sucesso!", "", "success");
//                $("#nome, #email, #telefone, #endereco, #passaporte").val('');
            }
        });
//        $("#clientes").empty();
//            $('#clientes').append(" 
<?php
//   echo"$('#clientes').append('";

//   foreach ($clientes->result() as $cliente) {
//
////       echo "<div class='col-md-2 col-sm-4 col-xs-6'>";
////       echo "<div class='c-item'>";
////       echo "<a href='" . base_url() . "index.php/cliente/profile?id=" . $cliente->id . "' class='ci-avatar'>";
////       echo "<img src='" . base_url() . "assets/img/contacts/10.jpg' alt=''>";
////       echo "</a>";
//       echo"$('#clientes').append('";
//       echo "<div class='c-info'><strong>" . $cliente->nome . "</strong>";
//       echo "<small>" . $cliente->email . "</small>";
//       echo "</div>";
//
////       echo "<div class='c-footer'>";
////       echo "<button class='waves-effect'><i class='zmdi zmdi-person-add'></i> Add</button>";
////       echo "</div>";
////       echo "</div>";
////       echo "</div>";
//          echo "');";
//
//   }
?>
//    +");

        });
    });
</script>
//<?php
//   echo "<script type='text/javascript'>";
//
//   foreach ($tarefas->result() as $tarefa) {
//       echo var person = {firstName:"John", lastName:"Doe", age:46};
//   }
//
?>

</body>
</html>