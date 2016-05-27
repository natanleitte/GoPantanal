

<section id="content">
    <div class="container c-alt">
        <div class="block-header">
            <h2>Agenda</h2>
        </div>

        <div id="calendar-widget"></div>

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
                                <div class="select">
                                    <select class="form-control" name="cliente">
                                        <option value="">Atribua a um cliente</option>
                                        <?php
                                        foreach($clientes->result() as $cliente){
                                            echo "<option value=". $cliente->id .">" . $cliente->nome . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div id="cor-tarefa" class="form-group">
                                <label for="eventName">Cores</label>
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
                            <input type="hidden" name='status' id="status" value="A"/>
                            <input type="hidden" name='cor' value="" id="cor"/>

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

    function adicionarTarefa() {
        $('#cor').val($('#cor-tarefa').find('.selected').attr('data-tag'));
        
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/tarefa/inserirTarefa',
            type: 'POST',
            data: $("#formTarefa").serialize(),
            success: function(msg) {
                var nFrom = 'top';
                var nAlign = 'right';
                var nIcons = 'fa fa-check';
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