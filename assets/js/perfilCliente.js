var perfilCliente = {};
var URL;

perfilCliente.inserirUrl = function (url) {
    URL = url;
};

perfilCliente.controladorTabs = function () {
    $('.js-container-tab').hide();
    $('.active').show();

    $('#botao-agendar-comrpomissos').unbind().on('click', function () {
        esconderTabsInativas();
        exibirTabAtiva($('#botao-agendar-comrpomissos'), $('#agendar-compromissos'));
    });

    $('#botao-compromisso').unbind().on('click', function () {
        esconderTabsInativas();
        exibirTabAtiva($('#botao-compromisso'), $('#compromisso'));
    });
    $('#botao-perfil').unbind().on('click', function () {
        esconderTabsInativas();
        exibirTabAtiva($('#botao-perfil'), $('#perfil'));
    });
    $('#botao-orcamento').unbind().on('click', function () {
        esconderTabsInativas();
        exibirTabAtiva($('#botao-orcamento'), $('#orcamento'));
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
            swal("Tarefa agendada, para daqui " + qtdDias + " dia(s)!", "", "success");
        }
    });
};

perfilCliente.enviarOrcamento = function () {
    var orcamentoSelecionado = $("#seletetorDeOrcamento").val();
    $('#email').val($('#emailDoDestinatario').html());
    $('#corpoDoEmail').val($("." + orcamentoSelecionado).html());

//    $.ajax({
//        url: URL + 'index.php/mail/enviarOrcamento',
//        type: 'POST',
//        data: $("#formOrcamento").serialize(),
//        success: function (msg) {
//            swal("Orcamento enviado com sucesso!", "", "success");
//            $("#email, #corpoDoEmail").val('');
//        }
//    });
};

perfilCliente.gerarPDF = function () {
    var orcamentoSelecionado = $("#seletetorDeOrcamento").val();
    $("." + orcamentoSelecionado).find('input').each(function(){
        $(this).replaceWith($("<span />").text(this.value))
    });
    $('#html').val($("." + orcamentoSelecionado).html());
    $('#nome').val($("#seletetorDeOrcamento").val());
};