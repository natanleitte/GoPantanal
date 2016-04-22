var tarefa = {};


tarefa.gerenciaItem = function() {
    /*
     * Todo Add new item
     */
    if ($('#todo-lists')[0]) {
        //Add Todo Item
        $('body').on('click', '#add-tl-item .add-new-item', function() {
            $(this).parent().addClass('toggled');
        });

        //Dismiss
        $('body').on('click', '.add-tl-actions > a', function(e) {
            e.preventDefault();
            var x = $(this).closest('#add-tl-item');
            var y = $(this).data('tl-action');

            if (y == "dismiss") {
                x.find('textarea').val('');
                x.removeClass('toggled');
            }

            if (y == "save") {
                x.find('textarea').val('');
                x.removeClass('toggled');
                var tituloDaTarefa = $('#message').val();
                var clienteDaTarefa = $('#cliente').val();
                var dataDaTarefa = moment().locale('en').format('ddd MMM DD YYYY hh:mm:ss');
                
                if (tituloDaTarefa.trim()) {
                    $('#message').val('');

                    $.ajax({
                        url: $('#base_url').val() + 'index.php/tarefa/inserirTarefa',
                        type: 'POST',
                        data: {titulo: tituloDaTarefa, data_ini: (dataDaTarefa + " GMT+0000"), data_fim: (dataDaTarefa + " GMT+0000"), status: 'A', cliente: clienteDaTarefa},
                        success: function(msg) {
                            window.location.reload();
                            swal("Tarefa adicionada.", "", "success");
                        },
                        error: function(msg){
                            console.log(msg);
                        }
                    });
                } else {
                    swal("Tarefa esta com a descrição em branco.", "", "info");
                }
            }
        });
    }
}

tarefa.alteraStatusDaTarefa = function() {
    $('.js-container-da-tarefa').on('change', 'input:checkbox', function() {
        if ($(this).is(':checked')) {
            $.ajax({
                url: $('#base_url').val() + 'index.php/tarefa/alteraStatusDaTarefa',
                type: 'POST',
                data: {id: $(this).attr('id'), status: "I"},
                success: function(msg) {
                    swal("Tarefa concluída.", "", "success");
                }
            });
        }
        else {
            $.ajax({
                url: $('#base_url').val() + 'index.php/tarefa/alteraStatusDaTarefa',
                type: 'POST',
                data: {id: $(this).attr('id'), status: "A"},
                success: function(msg) {
                    swal("Tarefa em aberto.", "", "success");
                }
            });
        }
    });
}
