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

perfilCliente.prepararParaGerarPDF = function () {
    var orcamentoSelecionado = $("#seletetorDeOrcamento").val();
    $("." + orcamentoSelecionado).find('input').each(function () {
        $(this).replaceWith($("<span style='font-size: 12px'/>").text(this.value));
    });
    $('#html').val($("." + orcamentoSelecionado).html());
    $('#nome').val($("#seletetorDeOrcamento").val());
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
    var orcamento = $("#seletetorDeOrcamento").val();
    $("." + orcamento).show();
    $("select").change(function () {
        var orcamentoSelecionado = $(this).val();
        $(".card-orcamento").hide();
        $("." + orcamentoSelecionado).show();
    });
};

perfilCliente.exibirDocumentos = function(){
    $(".card-orcamento").hide();
    var orcamento = $("#seletorDeDocumentos").val();
    $("." + orcamento).show();
    $("select").change(function () {
        var orcamentoSelecionado = $(this).val();
        $(".card-orcamento").hide();
        $("." + orcamentoSelecionado).show();
    });
}
;
