<?php
//
//foreach ($cliente->result() as $row) {
//    $cliente = $row;
//}
?>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker_ini, #datetimepicker_fim').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });
</script>

<section id="content">
    <div class="container">

        <div class="block-header">
            <h2><?php // echo $cliente->nome;         ?> <!--<small>Web/UI Developer, Edinburgh, Scotland</small>--></h2>

            <ul class="actions m-t-20 hidden-xs">
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="">Privacy Settings</a>
                        </li>
                        <li>
                            <a href="">Account Settings</a>
                        </li>
                        <li>
                            <a href="">Other Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-body card-padding">

                <div class="pm-body clearfix">
                    <ul class="tab-nav tn-justified">
                        <li class="waves-effect"><a href="<?php echo base_url() . 'index.php/hoteltour?id=' . $tour;?>">Hotéis</a></li>
                        <li class="active waves-effect"><a href="<?php echo base_url() . 'index.php/transportetour/index' ?>">Transportes</a></li>
                        <li class="waves-effect"><a href="#">Passeios</a></li>
                        <li class="waves-effect"><a href="#">Guias</a></li>
                    </ul>

                    <input type="hidden" value="<?php echo $tour; ?>"/>
                    <div class="pmb-block">
                        <div class="pmbb-header">
                            <h2><i class="zmdi zmdi-assignment-o m-r-5"></i> Agende os Transportes</h2>
                            <form role="form" id="formHotelTour">
                                <div class="col-sm-6">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="fg-line">
                                                <div class="select">
                                                    <select name="hotel" class="form-control" placeholder="Hotéis">
                                                        <?php
                                                        foreach ($hoteis->result() as $hotel) {
                                                            echo "<option value = '" . $hotel->id . "'>" . $hotel->nome . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class='input-group date' id='datetimepicker_ini'>
                                            <input type='text' class="form-control" id="data_ini" name="data_ini" placeholder="Entrada" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class='input-group date' id='datetimepicker_fim'>
                                            <input type='text' class="form-control" id="data_fim" name="data_fim" placeholder="Saída" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <h4><i class="zmdi zmdi-assignment-check m-r-5"></i> Hotel Nova Vida</h4>
                                </div>
                                <input type="hidden" name="tour" value="<?php echo $tour; ?>"/>
                            </form>
                            <div class="col-sm-12">
                                <button onclick="adicionarHotelTour()" class="btn bgm-blue btn-default btn-icon-text"><i class="zmdi zmdi-arrow-forward"></i> Adicionar Hotel</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>

<script type="text/javascript">
    function adicionarHotelTour()
    {
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/HotelTour/inserirHotelTour',
            type: 'POST',
            data: $("#formHotelTour").serialize(),
            success: function (msg) {
                swal("Hotel inserido com sucesso!", "", "success");
                $("#data_ini, #data_fim").val('');
            }
        });
        return false;
    }
</script>