<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<?php
$count = 0;
foreach ($tarefas->result() as $tarefa)
    if ($tarefa->status == 'A')
        $count++;
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Go Pantanal</title>


    <!-- Vendor CSS -->
    <link href="<?php echo base_url() . "assets/" ?>vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">        
    <link href="<?php echo base_url() . "assets/" ?>vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/bower_components/nouislider/distribute/jquery.nouislider.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/farbtastic/farbtastic.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/bower_components/chosen/chosen.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>vendors/summernote/dist/summernote.css" rel="stylesheet">

    <!-- CSS -->
    <link href="<?php echo base_url() . "assets/" ?>css/app.min.1.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>css/app.min.2.css" rel="stylesheet">

    <!-- Following CSS are used only for the Demp purposes thus you can remove this anytime. -->
    <style type="text/css">
        .toggle-switch .ts-label {
            min-width: 130px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body class="toggled sw-toggled">
    <header id="header" class="clearfix" data-current-skin="blue">
        <ul class="header-inner">
            <li id="menu-trigger" data-trigger="#sidebar">
                <div class="line-wrap">
                    <div class="line top"></div>
                    <div class="line center"></div>
                    <div class="line bottom"></div>
                </div>
            </li>

            <li class="logo hidden-xs">
                <a href="<?php echo base_url(); ?>">Go Pantanal <small> beta </small></a>
            </li>

            <li class="pull-right">
                <ul class="top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="">
                            <i class="tm-icon zmdi zmdi-email"></i>
                            <?php echo $qtdDeEmailsNaoLidos > 0 ? "<i class='tmn-counts'>" . $qtdDeEmailsNaoLidos . "</i>" : ""; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview">
                                <div class="lv-header">
                                    Caixa de Entrada
                                </div>
                                <div class="lv-body">
                                    <?php
                                    foreach ($ultimosCincoEmails as $email) {
                                        ?>
                                        <a class="lv-item" href="<?php echo base_url() . "index.php/Mail/detalharEmail?idDoEmailNoServidor=" . $email->idDoEmailNoServidor; ?>">
                                            <div class="media">
                                                <div class="pull-left">
                                                    <i class="zmdi <?php echo $email->foiLido ? "zmdi-email-open" : "zmdi-email"; ?> zmdi-hc-2x"></i>
                                                </div>
                                                <div class="media-body">
                                                    <?php echo $email->foiLido ? "" : "<b>"; ?>
                                                    <div class="lv-title"><?php echo $email->assunto; ?></div>
                                                    <small class="lv-small"><?php echo $email->nomeRemetente; ?></small>
                                                    <?php echo $email->foiLido ? "" : "</b>"; ?>
                                                </div>
                                            </div>
                                        </a>
                                        <?php
                                    } //Fim do foreach
                                    ?>
                                </div>
                                <a class="lv-footer" href="<?php echo base_url() . "index.php/mail"; ?>">Ver todos</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="">
                            <i class="tm-icon zmdi zmdi-notifications"></i>
                            <i class="tmn-counts">9</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications">
                                <div class="lv-header">
                                    Notification

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-clear="notification">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url() ?>assets/img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url() . "assets/" ?>img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url() . "assets/" ?>img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url() . "assets/" ?>img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url() . "assets/" ?>img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <a class="lv-footer" href="">View Previous</a>
                            </div>

                        </div>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" href="">
                            <i class="tm-icon zmdi zmdi-view-list-alt"></i>
                            <?php
                            if ($count > 0) {
                                echo "<i class='tmn-counts'>" . $count . "</i>";
                            }
                            ?>
                        </a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="listview">
                                <div class="lv-header">
                                    Tarefas
                                </div>
                                <div class="lv-body">
                                    <?php
                                    foreach ($tarefas->result() as $tarefa) {

                                        if ($tarefa->status == 'A') {

                                            echo "  <div class='lv-item'>";
                                            echo "<div class='lv-title m-b-5'>" . $tarefa->titulo . "</div>";
                                            echo "<div class='progress'>";
                                            echo "<div class='progress-bar' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width: 100%'>";
                                            echo "<span class='sr-only'>100% Complete (success)</span>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                        }
                                    }
                                    ?>
                                </div>

                                <a class="lv-footer" href="<?php echo base_url() . "index.php/" ?>tarefa">Ver Todos</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="skin-switch hidden-xs">
                                <span class="ss-skin bgm-lightblue" data-skin="lightblue"></span>
                                <span class="ss-skin bgm-bluegray" data-skin="bluegray"></span>
                                <span class="ss-skin bgm-cyan" data-skin="cyan"></span>
                                <span class="ss-skin bgm-teal" data-skin="teal"></span>
                                <span class="ss-skin bgm-orange" data-skin="orange"></span>
                                <span class="ss-skin bgm-blue" data-skin="blue"></span>
                            </li>
                            <li class="divider hidden-xs"></li>
                            <li class="hidden-xs">
                                <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            <li>
                                <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Top Search Content -->
        <div id="top-search-wrap">
            <div class="tsw-inner">
                <i id="top-search-close" class="zmdi zmdi-arrow-left"></i>
                <input type="text">
            </div>
        </div>
    </header>

    <section id="main" data-layout="layout-1">
        <aside id="sidebar" class="sidebar c-overflow">
            <div class="profile-menu">
                <a href="">
                    <div class="profile-pic">
                        <img src="<?php echo base_url(); ?>assets/img/profile-pics/4.jpg" alt="">
                    </div>
                    <div class="profile-info">
                        Go Pantanal
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </a>

                <ul class="main-menu">
                    <li>
                        <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                    </li>
                    <li>
                        <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                    </li>
                </ul>
            </div>

            <ul class="main-menu">
                <li class="active">
                    <a href="<?php echo base_url() ?>"><i class="zmdi zmdi-home"></i> Home</a>
                </li>
                <li class="sub-menu">
                    <a href="index.html"><i class="zmdi zmdi-accounts"></i> Clientes</a>
                    <ul>
                        <li><a href="<?php echo base_url() . "index.php/" ?>cliente">Ver Todos</a></li>
                        <li><a href="<?php echo base_url() . "index.php/" ?>cliente/inserir">Inserir</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url() . "index.php/" ?>agenda"><i class="zmdi zmdi-calendar"></i> Agenda</a></li>
                <li><a href="<?php echo base_url() . "index.php/" ?>tarefa"><i class="zmdi zmdi-view-list"></i> Tarefas</a></li>
                <li><a href="<?php echo base_url() . "index.php/" ?>mail"><i class="zmdi zmdi-email"></i> E-mail</a></li>
            </ul>
        </aside>

