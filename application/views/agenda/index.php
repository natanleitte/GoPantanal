

<section id="content">
    <div class="container c-alt">
        <div class="block-header">
            <h2>Agenda</h2>

            <ul class="actions">
                <li>
                    <a href="">
                        <i class="zmdi zmdi-trending-up"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="zmdi zmdi-check-all"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="">Refresh</a>
                        </li>
                        <li>
                            <a href="">Manage Widgets</a>
                        </li>
                        <li>
                            <a href="">Widgets Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

        <div id="calendar"></div>

        <!-- Add event -->
        <div class="modal fade" id="addNew-event" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Adicionar um Evento</h4>
                    </div>
                    <div class="modal-body">
                        <form class="addEvent" role="form" id="formTarefa">
                            <div class="form-group">
                                <label for="eventName">Título do Evento</label>
                                <div class="fg-line">
                                    <input type="text" class="input-sm form-control" name="titulo" id="eventName" placeholder="ex: Agendar hotel">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="eventName">Tag Color</label>
                                <div class="event-tag">
                                    <span data-tag="bgm-teal" class="bgm-teal selected"></span>
                                    <span data-tag="bgm-red" class="bgm-red"></span>
                                    <span data-tag="bgm-pink" class="bgm-pink"></span>
                                    <span data-tag="bgm-blue" class="bgm-blue"></span>
                                    <span data-tag="bgm-lime" class="bgm-lime"></span>
                                    <span data-tag="bgm-green" class="bgm-green"></span>
                                    <span data-tag="bgm-cyan" class="bgm-cyan"></span>
                                    <span data-tag="bgm-orange" class="bgm-orange"></span>
                                    <span data-tag="bgm-purple" class="bgm-purple"></span>
                                    <span data-tag="bgm-gray" class="bgm-gray"></span>
                                    <span data-tag="bgm-black" class="bgm-black"></span>
                                </div>
                            </div>

                            <input type="hidden" name='data_ini' id="getStart" />
                            <input type="hidden" name='data_fim' id="getEnd" />
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-link" onclick="adicionarTarefa()" id="addEvent">Adicionar Evento</button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function notify(from, align, icon, type, animIn, animOut, title, message) {
        $.growl({
            icon: icon,
            title: title,
            message: message,
            url: ''
        }, {
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 20,
                y: 85
            },
            spacing: 10,
            z_index: 1031,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert" role="alert">' +
                    '<button type="button" class="close" data-growl="dismiss">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<span data-growl="icon"></span>' +
                    '<span data-growl="title"></span>' +
                    '<span data-growl="message"></span>' +
                    '<a href="#" data-growl="url"></a>' +
                    '</div>'
        });
    }

    function adicionarTarefa()
    {
//        alert("ola");
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/tarefa/inserirTarefa',
            type: 'POST',
            data: $("#formTarefa").serialize(),
            success: function (msg) {
//                swal("Evento inserido com sucesso!","", "success");

                var nFrom = 'top';
                var nAlign = 'right';
                var nIcons = 'fa fa-check'
                var nType = 'success';
                var nAnimIn = 'animated fadeIn';
                var nAnimOut = 'animated fadeOut';
                var title = 'Evento Inserido com Sucesso';
                var message = '';

                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, title, message);
            }
        });
        return false;
    }


    ;
</script>

<!-- Javascript Libraries -->
<!--<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!--
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() . "assets/" ?>vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>-->

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
    <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<!--<script src="<?php echo base_url() . "assets/" ?>js/functions.js"></script>
<script src="<?php echo base_url() . "assets/" ?>js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
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
            events: [
                {
                    title: 'Hangout with friends',
                    start: new Date(y, m, 1),
                    allDay: true,
                    className: 'bgm-cyan'
                },
                {
                    title: 'Meeting with client',
                    start: new Date(y, m, 10),
                    allDay: true,
                    className: 'bgm-orange'
                },
                {
                    title: 'Repeat Event',
                    start: new Date(y, m, 18),
                    allDay: true,
                    className: 'bgm-amber'
                },
                {
                    title: 'Semester Exam',
                    start: new Date(y, m, 20),
                    allDay: true,
                    className: 'bgm-green'
                },
                {
                    title: 'Soccor match',
                    start: new Date(y, m, 5),
                    allDay: true,
                    className: 'bgm-lightblue'
                },
                {
                    title: 'Coffee time',
                    start: new Date(y, m, 21),
                    allDay: true,
                    className: 'bgm-orange'
                },
                {
                    title: 'Job Interview',
                    start: new Date(y, m, 5),
                    allDay: true,
                    className: 'bgm-amber'
                },
                {
                    title: 'IT Meeting',
                    start: new Date(y, m, 5),
                    allDay: true,
                    className: 'bgm-green'
                },
                {
                    title: 'Brunch at Beach',
                    start: new Date(y, m, 1),
                    allDay: true,
                    className: 'bgm-lightblue'
                },
                {
                    title: 'Live TV Show',
                    start: new Date(y, m, 15),
                    allDay: true,
                    className: 'bgm-cyan'
                },
                {
                    title: 'Software Conference',
                    start: new Date(y, m, 25),
                    allDay: true,
                    className: 'bgm-lightblue'
                },
                {
                    title: 'Coffee time',
                    start: new Date(y, m, 30),
                    allDay: true,
                    className: 'bgm-orange'
                },
                {
                    title: 'Job Interview',
                    start: new Date(y, m, 30),
                    allDay: true,
                    className: 'bgm-green'
                },
            ],
            //On Day Select
            select: function (start, end, allDay) {
                $('#addNew-event').modal('show');
                $('#addNew-event input:text').val('');
                $('#getStart').val(start);
                $('#getEnd').val(end);
            }
        });

        //Create and ddd Action button with dropdown in Calendar header. 
        var actionMenu = '<ul class="actions actions-alt" id="fc-actions">' +
                '<li class="dropdown">' +
                '<a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>' +
                '<ul class="dropdown-menu dropdown-menu-right">' +
                '<li class="active">' +
                '<a data-view="month" href="">Month View</a>' +
                '</li>' +
                '<li>' +
                '<a data-view="basicWeek" href="">Week View</a>' +
                '</li>' +
                '<li>' +
                '<a data-view="agendaWeek" href="">Agenda Week View</a>' +
                '</li>' +
                '<li>' +
                '<a data-view="basicDay" href="">Day View</a>' +
                '</li>' +
                '<li>' +
                '<a data-view="agendaDay" href="">Agenda Day View</a>' +
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
                    allDay: true,
                    className: tagColor

                }, true); //Stick the event

                $('#addNew-event form')[0].reset()
                $('#addNew-event').modal('hide');
            }

            else {
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
</script>-->