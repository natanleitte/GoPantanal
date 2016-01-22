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

    <!-- CSS -->
    <link href="<?php echo base_url() . "assets/" ?>css/app.min.1.css" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/" ?>css/app.min.2.css" rel="stylesheet">
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>

</head>
<body>
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
                <a href="<?php echo base_url();?>">Go Pantanal</a>
            </li>

            <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>

                    <li id="top-search">
                        <a href=""><i class="tm-icon zmdi zmdi-search"></i></a>
                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" href="">
                            <i class="tm-icon zmdi zmdi-email"></i>
                            <i class="tmn-counts">6</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview">
                                <div class="lv-header">
                                    Messages
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="<?php echo base_url() . "assets/" ?>img/profile-pics/1.jpg" alt="">
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
                                <a class="lv-footer" href="">View All</a>
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
                                                <img class="lv-img-sm" src="<?php echo base_url() . "assets/" ?>img/profile-pics/1.jpg" alt="">
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
                    <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                        <a href=""><i class="tm-icon zmdi zmdi-comment-alt-text"></i></a>
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
                        <img src="assets/img/profile-pics/1.jpg" alt="">
                    </div>

                    <div class="profile-info">
                        Malinda Hollaway

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
<!--
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-view-compact"></i> Headers</a>

                    <ul>
                        <li><a href="textual-menu.html">Textual menu</a></li>
                        <li><a href="image-logo.html">Image logo</a></li>
                        <li><a href="top-mainmenu.html">Mainmenu on top</a></li>
                    </ul>
                </li>
                <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-widgets"></i> Widgets</a>

                    <ul>
                        <li><a href="widget-templates.html">Templates</a></li>
                        <li><a href="widgets.html">Widgets</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-view-list"></i> Tables</a>

                    <ul>
                        <li><a href="tables.html">Normal Tables</a></li>
                        <li><a href="data-tables.html">Data Tables</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>

                    <ul>
                        <li><a href="form-elements.html">Basic Form Elements</a></li>
                        <li><a href="form-components.html">Form Components</a></li>
                        <li><a href="form-examples.html">Form Examples</a></li>
                        <li><a href="form-validations.html">Form Validation</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                    <ul>
                        <li><a href="colors.html">Colors</a></li>
                        <li><a href="animations.html">Animations</a></li>
                        <li><a href="box-shadow.html">Box Shadow</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="preloaders.html">Preloaders</a></li>
                        <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li><a href="other-components.html">Others</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-trending-up"></i>Charts</a>
                    <ul>
                        <li><a href="flot-charts.html">Flot Charts</a></li>
                        <li><a href="other-charts.html">Other Charts</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                    <ul>
                        <li><a href="photos.html">Default</a></li>
                        <li><a href="photo-timeline.html">Timeline</a></li>
                    </ul>
                </li>

                <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                    <ul>
                        <li><a href="profile-about.html">Profile</a></li>
                        <li><a href="list-view.html">List View</a></li>
                        <li><a href="messages.html">Messages</a></li>
                        <li><a href="pricing-table.html">Pricing Table</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="wall.html">Wall</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="login.html">Login and Sign Up</a></li>
                        <li><a href="lockscreen.html">Lockscreen</a></li>
                        <li><a href="404.html">Error 404</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="form-examples.html"><i class="zmdi zmdi-menu"></i> 3 Level Menu</a>

                    <ul>
                        <li><a href="form-elements.html">Level 2 link</a></li>
                        <li><a href="form-components.html">Another level 2 Link</a></li>
                        <li class="sub-menu">
                            <a href="form-examples.html">I have children too</a>

                            <ul>
                                <li><a href="">Level 3 link</a></li>
                                <li><a href="">Another Level 3 link</a></li>
                                <li><a href="">Third one</a></li>
                            </ul>
                        </li>
                        <li><a href="form-validations.html">One more 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="https://wrapbootstrap.com/theme/material-admin-responsive-angularjs-WB011H985"><i class="zmdi zmdi-money"></i> Buy this template</a>
                </li>-->
            </ul>
        </aside>

        <aside id="chat" class="sidebar c-overflow">

            <div class="chat-search">
                <div class="fg-line">
                    <input type="text" class="form-control" placeholder="Search People">
                </div>
            </div>

            <div class="listview">
                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left p-relative">
                            <img class="lv-img-sm" src="assets/img/profile-pics/2.jpg" alt="">
                            <i class="chat-status-busy"></i>
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Jonathan Morris</div>
                            <small class="lv-small">Available</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left">
                            <img class="lv-img-sm" src="assets/img/profile-pics/1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="lv-title">David Belle</div>
                            <small class="lv-small">Last seen 3 hours ago</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left p-relative">
                            <img class="lv-img-sm" src="assets/img/profile-pics/3.jpg" alt="">
                            <i class="chat-status-online"></i>
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Fredric Mitchell Jr.</div>
                            <small class="lv-small">Availble</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left p-relative">
                            <img class="lv-img-sm" src="assets/img/profile-pics/4.jpg" alt="">
                            <i class="chat-status-online"></i>
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Glenn Jecobs</div>
                            <small class="lv-small">Availble</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left">
                            <img class="lv-img-sm" src="assets/img/profile-pics/5.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Bill Phillips</div>
                            <small class="lv-small">Last seen 3 days ago</small>
                        </div>
                    </div>
                </a>

                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left">
                            <img class="lv-img-sm" src="assets/img/profile-pics/6.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Wendy Mitchell</div>
                            <small class="lv-small">Last seen 2 minutes ago</small>
                        </div>
                    </div>
                </a>
                <a class="lv-item" href="">
                    <div class="media">
                        <div class="pull-left p-relative">
                            <img class="lv-img-sm" src="assets/img/profile-pics/7.jpg" alt="">
                            <i class="chat-status-busy"></i>
                        </div>
                        <div class="media-body">
                            <div class="lv-title">Teena Bell Ann</div>
                            <small class="lv-small">Busy</small>
                        </div>
                    </div>
                </a>
            </div>
        </aside>

