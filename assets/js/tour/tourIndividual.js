var tour = {};
var URL;

tour.inserirUrl = function (url) {
    URL = url;
};

tour.inserirHotel = function(){
    $.ajax({
        url: URL + 'index.php/cliente/adicionarHotelTour',
        type: 'POST',
        data: {
            idHotel: $("#hoteis").val()
        },
        success: function (msg) {
            swal("Adicionado!", "", "success");
        }
    });
};