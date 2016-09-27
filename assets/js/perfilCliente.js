var perfilCliente = {};
var URL;

perfilCliente.inserirUrl = function(url){
    URL = url;
};

perfilCliente.controladorTabs = function () {
    $('#botao-compromisso').on('click', function () {
        esconderTabsInativas();
        exibirTabAtiva($('#botao-compromisso'), $('#compromisso'));
    });
    $('#botao-perfil').on('click', function () {
        esconderTabsInativas();
        exibirTabAtiva($('#botao-perfil'), $('#perfil'));
    });
    $('#botao-orcamento').on('click', function () {
        esconderTabsInativas();
        exibirTabAtiva($('#botao-orcamento'), $('#orcamento'));
    });

    $('#botao-agendar-comrpomissos').on('click', function () {
        esconderTabsInativas();
        exibirTabAtiva($('#botao-agendar-comrpomissos'), $('#agendar-compromissos'));
    });

    function exibirTabAtiva(nomeDoBotao, conteudoDaTab) {
        nomeDoBotao.parent('li').addClass('active');
        conteudoDaTab.show();
    }

    function esconderTabsInativas() {
        $('.js-tab-menu').removeClass('active');
        $('.js-container-tab').hide();
    }
};

perfilCliente.inserirTarefaCom = function (cor, qtdDias, descricao, idCliente) {
    $.ajax({
        url: URL + 'index.php/Tarefa/inserirTarefaDetalhada',
        type: 'POST',
        data: {
            cor: cor,
            qtdDias: qtdDias,
            descricao: descricao,
            cliente: idCliente
        },
        success: function (msg) {
            swal("Tarefa agendada!", "", "success");
        }
    });
};