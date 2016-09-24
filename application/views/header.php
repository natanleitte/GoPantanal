<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<?php
$count = 0;
foreach ($ultimasTarefas->result() as $tarefa) {
    $count++;
}
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
        .btn-demo > .btn, .btn-group-demo > .btn-group {
            margin: 0 5px 10px 0;
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
                                        <a class="lv-item" href="<?php echo base_url() . "index.php/Mail/detalharEmail?id=" . $email->idDoEmailNoServidor; ?>">
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
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" href="">
                            <i class="tm-icon zmdi zmdi-notifications"></i>
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
                                    foreach ($ultimasTarefas->result() as $tarefa) {
                                        echo "  <div class='lv-item'>";
                                        echo "<div class='lv-title m-b-5'>" . $tarefa->titulo . "</div>";
                                        echo "<div class='progress'>";
                                        echo "<div class='progress-bar " . $tarefa->cor . "' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width: 100%'>";
                                        echo "<span class='sr-only'>100% Complete (success)</span>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
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
                                <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i>Exibir em Tela Cheia</a>
                            </li>
                            <li>
                                <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i>Limpar Memória Local</a>
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
                        <a href="<?php echo base_url() . "index.php/login/destruirSessao"; ?>"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                    </li>
                </ul>
            </div>

            <ul class="main-menu">
                <li class="active">
                    <a href="<?php echo base_url() . 'index.php/index'; ?>"><i class="zmdi zmdi-home"></i> Home</a>
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
                <li class="sub-menu">
                    <a href="index.html"><i class="zmdi zmdi-hotel"></i> Hotéis</a>
                    <ul>
                        <li><a href="<?php echo base_url() . "index.php/" ?>hotel">Ver Todos</a></li>
                        <li><a href="<?php echo base_url() . "index.php/" ?>hotel/inserir">Inserir</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="index.html"><i class="zmdi zmdi-car"></i> Transportes</a>
                    <ul>
                        <li><a href="<?php echo base_url() . "index.php/" ?>transporte">Ver Todos</a></li>
                        <li><a href="<?php echo base_url() . "index.php/" ?>transporte/inserir">Inserir</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="index.html"><i class="zmdi zmdi-landscape"></i> Passeios</a>
                    <ul>
                        <li><a href="<?php echo base_url() . "index.php/" ?>passeio">Ver Todos</a></li>
                        <li><a href="<?php echo base_url() . "index.php/" ?>passeio/inserir">Inserir</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="index.html"><i class="zmdi zmdi-sign-in"></i> Guias</a>
                    <ul>
                        <li><a href="<?php echo base_url() . "index.php/" ?>guia">Ver Todos</a></li>
                        <li><a href="<?php echo base_url() . "index.php/" ?>guia/inserir">Inserir</a></li>
                    </ul>
                </li>
            </ul>
        </aside>

