tarefa = {};


tarefa.gerenciaItem = $(document).ready(function() {
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
                if (!tituloDaTarefa.trim() && tituloDaTarefa.length > 100) {
                    $('#message').val('');

                    $.ajax({
                        url: $('#base_url').val() + 'index.php/tarefa/inserirTarefa',
                        type: 'POST',
                        data: {titulo: tituloDaTarefa, data_ini: 'teste', data_fim: 'teste', status: 'A'},
                        success: function(msg) {
                            window.location.reload();
                            swal("Tarefa adicionada.", "", "success");
                        }
                    });
                } else {
                    window.location.reload();
                    swal("Tarefa esta com a descrição em branco.", "", "info");
                }
            }
        });
    }
});

tarefa.alteraStatusDaTarefa = $(document).ready(function() {
    $('body').on('change', 'input:checkbox', function() {
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
});

tarefa.excluir = $(document).ready(function() {
    $('.js-excluir-tarefa').on('click', function() {
        var idDaTarefa = $(this).attr('iddatarefa');
        alert(idDaTarefa);
        $.ajax({
            url: $('#base_url').val() + 'index.php/tarefa/excluir',
            type: 'POST',
            data: {id: idDaTarefa},
            success: function(msg) {
            }
        });
    });
});