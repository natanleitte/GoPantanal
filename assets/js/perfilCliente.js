var perfilCliente = {};
var URL;

perfilCliente.inserirUrl = function (url) {
    URL = url;
};

perfilCliente.controladorTabs = function () {
    $('.js-container-tab').hide();
    $('.active').show();
    
    casoHajaUmCliqueExibeATabAtiva($('#botao-agendar-comrpomissos'), $('#agendar-compromissos'));
    casoHajaUmCliqueExibeATabAtiva($('#botao-compromisso'), $('#compromisso'));
    casoHajaUmCliqueExibeATabAtiva($('#botao-perfil'), $('#perfil'));
    casoHajaUmCliqueExibeATabAtiva($('#botao-orcamento'), $('#orcamento'));
    casoHajaUmCliqueExibeATabAtiva($('#botao-documentos'), $('#documentos'));
    casoHajaUmCliqueExibeATabAtiva($('#botao-tour-individual'), $('#tour-individual'));
    
    
    function casoHajaUmCliqueExibeATabAtiva(nomeDoBotao, conteudoDaTab) {
        nomeDoBotao.unbind().on('click', function () {
            esconderTabsInativas();
            exibirTabAtiva(nomeDoBotao, conteudoDaTab);
        });
    }

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
};

perfilCliente.prepararParaGerarPDF = function () {
    var orcamentoSelecionado = $("#seletetorDeOrcamento").val();
    $("." + orcamentoSelecionado).find('input').each(function () {
        $(this).replaceWith($("<span style='font-size: 12px'/>").text(this.value));
    });
    $('#html').val($("." + orcamentoSelecionado).html());
    $('#nome').val($("#seletetorDeOrcamento").val());
};