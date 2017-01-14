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
    casoHajaUmCliqueExibeATabAtiva($('#botao-teste'), $('#teste'));


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

perfilCliente.prepararParaGerarPDF = function (nomeDoSeletor) {
    var orcamentoSelecionado = $("#" + nomeDoSeletor).val();
    var nomeDoOrcamentoSelecionado = $("#" + nomeDoSeletor + " option:selected").text();
    $("." + orcamentoSelecionado).find('input').each(function () {
        $(this).replaceWith($("<span style='font-size: 12px'/>").text(this.value));
    });
    $('#html_' + nomeDoSeletor).val($("." + orcamentoSelecionado).html());
    $('#nome_' + nomeDoSeletor).val($("#" + nomeDoSeletor).val());

    $('#form_' + nomeDoSeletor).submit();
};

perfilCliente.prepararArquivoTourPDF = function (nomeDoSeletor) {
    $('#html_' + nomeDoSeletor).val($(".corpo-do-tour-individual").html());
    $('#nome_' + nomeDoSeletor).val('Tour Individual');

    $('#form_' + nomeDoSeletor).submit();
};

perfilCliente.buscar = function () {
    $("#busca").keyup(function () {
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/cliente/buscaCliente',
            type: 'POST',
            datatype: 'json',
            data: {query: $("#busca").val()},
            success: function (data) {
                for ($i = 0; $i < data.length; $i++) {
                    console.log(data[$i]['nome']);
                }
            }
        });
    });
};

perfilCliente.exibirOrcamentos = function () {
    $(".card-orcamento").hide();
    var orcamento = $("#seletetorDeOrcamento option:first").val();
    $("." + orcamento).show();
    $("select").change(function () {
        var orcamentoSelecionado = $(this).val();
        $(".card-orcamento").hide();
        $("." + orcamentoSelecionado).show();
    });
};

perfilCliente.exibirDocumentos = function () {
    $(".card-documento").hide();
    var orcamento = $("#seletetorDeDocumentos option:first").val();
    console.log(orcamento);
    $("." + orcamento).show();
    $("select").change(function () {
        var orcamentoSelecionado = $(this).val();
        $(".card-documento").hide();
        $("." + orcamentoSelecionado).show();
    });
}
;
