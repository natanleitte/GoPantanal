var email = {};
var URL;

email.inserirUrl = function (url) {
    URL = url;
};

email.enviarOrcamento = function () {
    var orcamentoSelecionado = $("#seletetorDeOrcamento").val();
    var nomeDoOrcamentoSelecionado = $("#seletetorDeOrcamento option:selected").text();
    var email = $('#emailDoDestinatario').html();
    enviar(orcamentoSelecionado, nomeDoOrcamentoSelecionado, email);
};

email.enviarDocumento = function () {
    var orcamentoSelecionado = $("#seletetorDeDocumentos").val();
    var nomeDoOrcamentoSelecionado = $("#seletetorDeDocumentos option:selected").text();
    var email = $('#emailDoDestinatario').html();
    enviar(orcamentoSelecionado, nomeDoOrcamentoSelecionado, email);
};

enviar = function (orcamentoSelecionado, nomeDoOrcamentoSelecionado, email) {
    $.ajax({
        url: URL + 'index.php/mail/enviarOrcamento',
        type: 'POST',
        data: {
            email: email,
            corpoDoEmail: $("." + orcamentoSelecionado).html()
        },
        success: function () {
            swal("O documento: " + nomeDoOrcamentoSelecionado + " foi encaminhado com sucesso para " + email, "", "success");
        },
        error: function () {
            swal("Não foi possivel enviar o documento: " + nomeDoOrcamentoSelecionado + ". Favor contatar o desenvolvedor.", "", "error");
        }
    });
}
