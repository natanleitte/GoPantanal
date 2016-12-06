<div class="pmbb-body card-padding">
    <div class="form-wizard-basic fw-container">
        <ul class="tab-nav text-center" data-tab-color="green">
            <li class="active"><a href="#hotelTour" data-toggle="tab"><i class="zmdi zmdi-hotel"></i> Hotel</a></li>
            <li><a href="#passeioTour" data-toggle="tab"><i class="zmdi zmdi-nature-people"></i> Passeio</a></li>
            <li><a href="#transporteTour" data-toggle="tab"><i class="zmdi zmdi-car"></i> Transporte</a></li>
            <li><a href="#guiaTour" data-toggle="tab"><i class="zmdi zmdi-face"></i> Guia</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active in" id="hotelTour">
                <?php include "tourIndividual/hotelTour.php"; ?>
            </div>
            <div class="tab-pane fade" id="passeioTour">
                <?php include "tourIndividual/passeioTour.php"; ?>
            </div>
            <div class="tab-pane fade" id="transporteTour">
                <?php include "tourIndividual/transporteTour.php"; ?>
            </div>
            <div class="tab-pane fade" id="guiaTour">
                <?php include "tourIndividual/guiaTour.php"; ?>
            </div>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="jumbotron text-center">
        <div class="right color c-green">
            <h1>Total do tour R$<span id="valor-total-do-tour"></span></h1>
        </div>
    </div>
</div>