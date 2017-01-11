var tour = {};
var URL;
tour.inserirUrl = function (url) {
    URL = url;
};
tour.inserirHotel = function () {
    idHotel = $("#hoteis option:selected").val();
    valor = obterNumeroFormatado("valor-hotel");
    $.ajax({
        url: URL + 'index.php/TourIndividual/adicionarHotelTour',
        type: 'POST',
        data: {
            idHotel: idHotel,
            valor: valor,
            dataInicio: $('#data-ini-hotel').val(),
            dataFim: $('#data-fim-hotel').val(),
            idCliente: urlParam('id')
        },
        success: function (hotelCadastrado) {
            var nomeMetodoDeExclusao = "hotel";
            inserirNovoItemNaTabelaComMensagemDeSucesso(hotelCadastrado, nomeMetodoDeExclusao);
        }
    });
};
tour.exclruirHotel = function (idHotel) {
    $.ajax({
        url: URL + 'index.php/TourIndividual/excluirHotelTour',
        type: 'POST',
        data: {
            idHotel: idHotel
        },
        success: function (msg) {
            $('#linha-do-hotel-' + idHotel).remove();
            tour.atualizarValorTotalDoTour();
            swal("Excluido!", "", "success");
        }
    });
};
tour.inserirPasseio = function () {
    idPasseio = $("#passeios option:selected").val();
    valor = obterNumeroFormatado("valor-passeio");
    $.ajax({
        url: URL + 'index.php/TourIndividual/adicionaPasseioTour',
        type: 'POST',
        data: {
            idPasseio: idPasseio,
            valor: valor,
            dataInicio: $('#data-ini-passeio').val(),
            dataFim: $('#data-fim-passeio').val(),
            idCliente: urlParam('id')
        },
        success: function (passeioCadastrado) {
            var nomeMetodoDeExclusao = "passeio";
            inserirNovoItemNaTabelaComMensagemDeSucesso(passeioCadastrado, nomeMetodoDeExclusao);
        }
    });
};
tour.exclruirPasseio = function (idPasseio) {
    $.ajax({
        url: URL + 'index.php/TourIndividual/excluirPasseioTour',
        type: 'POST',
        data: {
            idPasseio: idPasseio
        },
        success: function (msg) {
            $('#linha-do-passeio-' + idPasseio).remove();
            tour.atualizarValorTotalDoTour();
            swal("Excluido!", "", "success");
        }
    });
};
tour.inserirTransporte = function () {
    idTransporte = $("#transportes option:selected").val();
    valor = obterNumeroFormatado("valor-transporte");
    $.ajax({
        url: URL + 'index.php/TourIndividual/adicionaTransporteTour',
        type: 'POST',
        data: {
            idTransporte: idTransporte,
            valor: valor,
            dataInicio: $('#data-ini-transporte').val(),
            dataFim: $('#data-fim-transporte').val(),
            idCliente: urlParam('id')
        },
        success: function (transporteCadastrado) {
            var nomeMetodoDeExclusao = "transporte";
            inserirNovoItemNaTabelaComMensagemDeSucesso(transporteCadastrado, nomeMetodoDeExclusao);
        }
    });
};
tour.exclruirTransporte = function (idTransporte) {
    $.ajax({
        url: URL + 'index.php/TourIndividual/excluirTransporteTour',
        type: 'POST',
        data: {
            idTransporte: idTransporte
        },
        success: function (msg) {
            $('#linha-do-transporte-' + idTransporte).remove();
            tour.atualizarValorTotalDoTour();
            swal("Excluido!", "", "success");
        }
    });
};
tour.inserirGuia = function () {
    idGuia = $("#guias option:selected").val();
    valor = obterNumeroFormatado("valor-guia");
    $.ajax({
        url: URL + 'index.php/TourIndividual/adicionaGuiaTour',
        type: 'POST',
        data: {
            idGuia: idGuia,
            valor: valor,
            dataInicio: $('#data-ini-guia').val(),
            dataFim: $('#data-fim-guia').val(),
            idCliente: urlParam('id')
        },
        success: function (guiaCadastrado) {
            var nomeMetodoDeExclusao = "guia";
            inserirNovoItemNaTabelaComMensagemDeSucesso(guiaCadastrado, nomeMetodoDeExclusao);
        }
    });
};

tour.exclruirGuia = function (idGuia) {
    $.ajax({
        url: URL + 'index.php/TourIndividual/excluirGuiaTour',
        type: 'POST',
        data: {
            idGuia: idGuia
        },
        success: function (msg) {
            $('#linha-do-guia-' + idGuia).remove();
            tour.atualizarValorTotalDoTour();
            swal("Excluido!", "", "success");
        }
    });
};

tour.atualizarValorTotalDoTour = function () {
    $.ajax({
        url: URL + 'index.php/TourIndividual/total',
        type: 'POST',
        data: {
            idCliente: urlParam('id')
        },
        success: function (total) {
            console.log(total);
            $('#valor-total-do-tour').html(total.toString().replace(/\"/g, '').replace('R$', ''));
        }
    });
};

//Função para pegar parametro da url
urlParam = function (name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results === null) {
        return null;
    } else {
        return results[1] || 0;
    }
};

obterNumeroFormatado = function (objeto) {
    console.log(objeto);
    var valor = $("#" + objeto).val().replace('R$', '').replace(/\./g, '').replace(',', '.');
    console.log(valor);
    return valor;
};

formatarValorAposIncluirNaTabela = function (objeto) {
    $('#' + objeto).priceFormat({
        prefix: 'R$ ',
        centsSeparator: ',',
        thousandsSeparator: '.',
        clearPrefix: true
    });
};

inserirNovoItemNaTabelaComMensagemDeSucesso = function (objetoJSON, nomeDaGuia) {
    objetoParseado = $.parseJSON(objetoJSON);
    html = "<tr id='linha-do-"+ nomeDaGuia.toLowerCase() +"-" + objetoParseado.id + "'>" +
            "<td id='valor-do-"+ nomeDaGuia.toLowerCase() +"'>" + objetoParseado.preco + "</td>" +
            "<td>" + objetoParseado.nome + "</td>" +
            "<td>" + objetoParseado.cidade + "</td>" +
            "<td>" + objetoParseado.data_ini + "</td>" +
            "<td>" + objetoParseado.data_fim + "</td>" +
            "<td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.excluir" + nomeDaGuia.substr(0,1).toUpperCase()+nomeDaGuia.substr(1) + "(" + objetoParseado.id + ")'><span class='zmdi zmdi-delete'></span></button></td>" +
            "</tr>";
    $(".js-" + nomeDaGuia.toLowerCase() + "-tour-individual tr:last").after(html);
    tour.atualizarValorTotalDoTour();
    formatarValorAposIncluirNaTabela('valor-do-' + nomeDaGuia.toLowerCase());
    swal("Adicionado!", "", "success");
};