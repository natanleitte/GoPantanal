
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
    $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        var cId = $('#calendar'); //Change the name if you want. I'm also using thsi add button for more actions

        //Generate the Calendar
        cId.fullCalendar({
            header: {
                right: '',
                center: 'prev, title, next',
                left: ''
            },
            theme: true, //Do not remove this as it ruin the design
            selectable: true,
            selectHelper: true,
            editable: true,

            //Add Events
            <?php
            echo 'events:[';
            foreach ($tarefas->result() as $tarefa) {
                echo '{';
                echo "title:'" . $tarefa->titulo . "',";
                echo "start: new Date('" . $tarefa->data_ini . "'),";
                echo "end: new Date('" . $tarefa->data_fim . "'),";
                echo "allDay: true,";
                echo "className: '" . $tarefa->cor . "'";
                echo "},";
            }
            echo "],";
            ?>

         //On Day Select
         select: function(start, end, allDay) {
             $('#addNew-event').modal('show');   
             $('#addNew-event input:text').val('');
             $('#getStart').val(start);
             $('#getEnd').val(end);
         }
     });

    /*
     * Calendar Widget
     */
    $('#calendar-widget').fullCalendar({
        header: {
            right: '',
            center: 'prev, title, next',
            left: ''
        },
        theme: true,
        editable: true,
        selectable: true,
        <?php
        echo 'events:[';
        foreach ($tarefas->result() as $tarefa) {
            echo '{';
            echo "title:'" . $tarefa->titulo . "',";
            echo "start: new Date('" . $tarefa->data_ini . "'),";
            echo "className: '" . $tarefa->cor . "'";
            echo "},";
        }
        echo "],";
        ?>
    });

    //Create and ddd Action button with dropdown in Calendar header. 
    var actionMenu = '<ul class="actions actions-alt" id="fc-actions">' +
            '<li class="dropdown">' +
            '<a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>' +
            '<ul class="dropdown-menu dropdown-menu-right">' +
            '<li class="active">' +
            '<a data-view="month" href="">Mês</a>' +
            '</li>' +
            '<li>' +
            '<a data-view="basicWeek" href="">Semana</a>' +
            '</li>' +
            '<li>' +
            '<a data-view="agendaWeek" href="">Agenda Semana</a>' +
            '</li>' +
            '<li>' +
            '<a data-view="basicDay" href="">Dia</a>' +
            '</li>' +
            '<li>' +
            '<a data-view="agendaDay" href="">Agenda Dia</a>' +
            '</li>' +
            '</ul>' +
            '</div>' +
            '</li>';


    cId.find('.fc-toolbar').append(actionMenu);

    //Event Tag Selector
    (function () {
        $('body').on('click', '.event-tag > span', function () {
            $('.event-tag > span').removeClass('selected');
            $(this).addClass('selected');
        });
    })();

    //Add new Event
    $('body').on('click', '#addEvent', function () {
        var eventName = $('#eventName').val();
        var tagColor = $('.event-tag > span.selected').attr('data-tag');

        if (eventName != '') {
            //Render Event
            $('#calendar').fullCalendar('renderEvent', {
                title: eventName,
                start: $('#getStart').val(),
                end: $('#getEnd').val(),
                allDay: false,
                className: tagColor

            }, true); //Stick the event

            $('#addNew-event form')[0].reset()
            $('#addNew-event').modal('hide');
        } else {
            $('#eventName').closest('.form-group').addClass('has-error');
        }
    });

    //Calendar views
    $('body').on('click', '#fc-actions [data-view]', function (e) {
        e.preventDefault();
        var dataView = $(this).attr('data-view');

        $('#fc-actions li').removeClass('active');
        $(this).parent().addClass('active');
        cId.fullCalendar('changeView', dataView);
    });
    });
</script>

</body>
</html>