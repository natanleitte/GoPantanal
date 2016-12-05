var tour = {};
var URL;

tour.inserirUrl = function (url) {
    URL = url;
};

tour.inserirHotel = function () {
    idHotel = $("#hoteis option:selected").val();
    $.ajax({
        url: URL + 'index.php/TourIndividual/adicionarHotelTour',
        type: 'POST',
        data: {
            idHotel: idHotel
        },
        success: function (hotelCadastrado) {
            hotelCadastrado = $.parseJSON(hotelCadastrado);
            html = "<tr id='linha-do-hotel-" + hotelCadastrado.id + "'><td>" + hotelCadastrado.nome + "</td><td>" + hotelCadastrado.telefone + "</td><td>" + hotelCadastrado.email + "</td><td>" + hotelCadastrado.responsavel + "</td><td>" + hotelCadastrado.endereco + "</td><td>" + hotelCadastrado.cidade + "</td><td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirHotel(" + hotelCadastrado.id + ")'><span class='zmdi zmdi-delete'></span></button></td></tr>";
            $('.js-hoteis-tour-individual tr:last').after(html);
            swal("Adicionado!", "", "success");
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
            swal("Excluido!", "", "success");
        }
    });
};

tour.inserirPasseio = function () {
    idPasseio = $("#passeios option:selected").val();
    $.ajax({
        url: URL + 'index.php/TourIndividual/adicionaPasseioTour',
        type: 'POST',
        data: {
            idPasseio: idPasseio
        },
        success: function (passeioCadastrado) {
            passeioCadastrado = $.parseJSON(passeioCadastrado);
            html = "<tr id='linha-do-passeio-" + passeioCadastrado.id + "'><td>" + passeioCadastrado.nome + "</td><td>" + passeioCadastrado.telefone + "</td><td>" + passeioCadastrado.email + "</td><td>" + passeioCadastrado.responsavel + "</td><td>" + passeioCadastrado.endereco + "</td><td>" + passeioCadastrado.cidade + "</td><td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirPasseio(" + passeioCadastrado.id + ")'><span class='zmdi zmdi-delete'></span></button></td></tr>";
            $('.js-passeios-tour-individual tr:last').after(html);
            swal("Adicionado!", "", "success");
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
            swal("Excluido!", "", "success");
        }
    });
};

tour.inserirTransporte = function () {
    idTransporte = $("#transportes option:selected").val();
    $.ajax({
        url: URL + 'index.php/TourIndividual/adicionaTransporteTour',
        type: 'POST',
        data: {
            idTransporte: idTransporte
        },
        success: function (transporteCadastrado) {
            transporteCadastrado = $.parseJSON(transporteCadastrado);
            html = "<tr id='linha-do-transporte-" + transporteCadastrado.id + "'><td>" + transporteCadastrado.nome + "</td><td>" + transporteCadastrado.telefone + "</td><td>" + transporteCadastrado.email + "</td><td>" + transporteCadastrado.responsavel + "</td><td>" + transporteCadastrado.endereco + "</td><td>" + transporteCadastrado.cidade + "</td><td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirPasseio(" + transporteCadastrado.id + ")'><span class='zmdi zmdi-delete'></span></button></td></tr>";
            $('.js-transportes-tour-individual tr:last').after(html);
            swal("Adicionado!", "", "success");
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
            swal("Excluido!", "", "success");
        }
    });
};

tour.inserirGuia = function () {
    idGuia = $("#guias option:selected").val();
    $.ajax({
        url: URL + 'index.php/TourIndividual/adicionaGuiaTour',
        type: 'POST',
        data: {
            idGuia: idGuia
        },
        success: function (guiaCadastrado) {
            guiaCadastrado = $.parseJSON(guiaCadastrado);
            html = "<tr id='linha-do-guia-" + guiaCadastrado.id + "'><td>" + guiaCadastrado.nome + "</td><td>" + guiaCadastrado.telefone + "</td><td>" + guiaCadastrado.email + "</td><td>" + guiaCadastrado.responsavel + "</td><td>" + guiaCadastrado.endereco + "</td><td>" + guiaCadastrado.cidade + "</td><td><button type='button' class='btn btn-icon waves-effect waves-circle' onclick='tour.exclruirPasseio(" + guiaCadastrado.id + ")'><span class='zmdi zmdi-delete'></span></button></td></tr>";
            $('.js-guias-tour-individual tr:last').after(html);
            swal("Adicionado!", "", "success");
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
            swal("Excluido!", "", "success");
        }
    });
};