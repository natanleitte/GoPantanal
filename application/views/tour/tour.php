<?php
foreach ($cliente->result() as $row) {
    $cliente = $row;
}
?>
<section id="content">
    <div class="container">

        <div class="block-header">
            <h2><?php echo $cliente->nome; ?> <!--<small>Web/UI Developer, Edinburgh, Scotland</small>--></h2>

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
                        <li class="active waves-effect"><a href="#">Hotéis</a></li>
                        <li class="waves-effect"><a href="#">Transportes</a></li>
                        <li class="waves-effect"><a href="#">Passeios</a></li>
                        <li class="waves-effect"><a href="#">Guias</a></li>
                    </ul>


                    <div class="pmb-block">
                        <div class="pmbb-header">
                            <h2><i class="zmdi zmdi-assignment-o m-r-5"></i> Agende os Hotéis</h2>
                            <div class="listview lv-bordered lv-lg">

                                <div class="lv-body">
                                    <div class="lv-item media">
                                        <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox" value="">
                                                <i class="input-helper"></i>
                                            </label>
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>
                                        </div>
                                    </div>

                                    <div class="lv-item media">
                                        <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox" value="">
                                                <i class="input-helper"></i>
                                            </label>
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        </div>

                        <div class="pmb-block">
                            <div class="pmbb-header">
                                <h2><i class="zmdi zmdi-account m-r-5"></i> Informações</h2>
                                <ul class="actions">
                                    <li>
                                        <a data-pmb-action="edit" href="<?php echo base_url() . "index.php/cliente/editar?id=" . $cliente->id ?>"><i class="zmdi zmdi-edit zmdi-hc-5x"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
