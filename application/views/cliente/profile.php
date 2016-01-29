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

        <div class="card" id="profile-main">
            <div class="pm-overview c-overflow">
                <div class="pmo-pic">
                    <div class="p-relative">
                        <a href="">
                            <img class="img-responsive" src="<?php echo base_url() . "assets/img/contacts/anonimo.png"; ?>" alt=""> 
                        </a>

                        <div class="dropdown pmop-message">
                            <a data-toggle="dropdown" href="" class="btn bgm-white btn-float z-depth-1">
                                <i class="zmdi zmdi-comment-text-alt"></i>
                            </a>

                            <div class="dropdown-menu">
                                <textarea placeholder="Funcionalidade estará disponível em breve..."></textarea>

                                <button class="btn bgm-green btn-float"><i class="zmdi zmdi-mail-send"></i></button>
                            </div>
                        </div>

                        <div class="dropdown pmop-message">
                            <a data-toggle="dropdown" href="" class="btn bgm-white btn-float z-depth-1">
                                <i class="zmdi zmdi-comment-text-alt"></i>
                            </a>

                            <div class="dropdown-menu">
                                <textarea placeholder="Funcionalidade estará disponível em breve..."></textarea>

                                <button class="btn bgm-green btn-float"><i class="zmdi zmdi-mail-send"></i></button>
                            </div>
                        </div>

                        <a href="" class="pmop-edit">
                            <i class="zmdi zmdi-camera"></i> <span class="hidden-xs">Update Profile Picture</span>
                        </a>
                    </div>


                    <div class="pmo-stat">
                        <h2 class="m-0 c-white"><?php echo $row->nome; ?></h2>
                    </div>
                </div>

                <div class="pmo-block pmo-contact hidden-xs">
                    <h2>Contato</h2>

                    <ul>
                        <li><i class="zmdi zmdi-phone"></i> <?php echo $row->telefone; ?></li>
                        <li><i class="zmdi zmdi-email"></i> <?php echo $row->email; ?></li>
                        <!--<li><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>-->
                        <li><i class="zmdi zmdi-airplane"></i> <?php echo $row->passaporte; ?> </li>
                        <li>
                            <i class="zmdi zmdi-pin"></i>
                            <address class="m-b-0 ng-binding">
                                <?php echo $row->endereco; ?>
                                <!--                                44-46 Morningside Road,<br>
                                                                Edinburgh,<br>
                                                                Scotland-->
                            </address>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pm-body clearfix">
                <ul class="tab-nav tn-justified">
                    <li class="active waves-effect"><a href="profile-about.html">Início</a></li>
                    <li class="waves-effect"><a href="#">Viagens</a></li>
                    <li class="waves-effect"><a href="#">Orçamentos</a></li>                 
                </ul>


                <!--                <div class="pmb-block">
                                    <div class="pmbb-header">
                                        <h2><i class="zmdi zmdi-equalizer m-r-5"></i> Summary</h2>
                
                                        <ul class="actions">
                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown">
                                                    <i class="zmdi zmdi-more-vert"></i>
                                                </a>
                
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li>
                                                        <a data-pmb-action="edit" href="">Edit</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pmbb-body p-l-30">
                                        <div class="pmbb-view">
                                            Sed eu est vulputate, fringilla ligula ac, maximus arcu. Donec sed felis vel magna mattis ornare ut non turpis. Sed id arcu elit. Sed nec sagittis tortor. Mauris ante urna, ornare sit amet mollis eu, aliquet ac ligula. Nullam dolor metus, suscipit ac imperdiet nec, consectetur sed ex. Sed cursus porttitor leo.
                                        </div>
                
                                        <div class="pmbb-edit">
                                            <div class="fg-line">
                                                <textarea class="form-control" rows="5" placeholder="Summary...">Sed eu est vulputate, fringilla ligula ac, maximus arcu. Donec sed felis vel magna mattis ornare ut non turpis. Sed id arcu elit. Sed nec sagittis tortor. Mauris ante urna, ornare sit amet mollis eu, aliquet ac ligula. Nullam dolor metus, suscipit ac imperdiet nec, consectetur sed ex. Sed cursus porttitor leo.</textarea>
                                            </div>
                                            <div class="m-t-10">
                                                <button class="btn btn-primary btn-sm">Save</button>
                                                <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->

                <div class="pmb-block">
                    <div class="pmbb-header">
                        <h2><i class="zmdi zmdi-account m-r-5"></i> Informações</h2>
                        <ul class="actions">
                            <li>
                                <a data-pmb-action="edit" href="<?php echo base_url() . "index.php/cliente/editar?id=" . $cliente->id ?>"><i class="zmdi zmdi-edit zmdi-hc-5x"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="pmbb-body p-l-30">
                        <div class="pmbb-view">
                            <dl class="dl-horizontal">
                                <dt>Nome</dt>
                                <dd><?php echo $cliente->nome; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Email</dt>
                                <dd><?php echo $cliente->email; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Telefone</dt>
                                <dd><?php echo $cliente->telefone; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Endereço</dt>
                                <dd><?php echo $cliente->endereco; ?></dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Passaporte</dt>
                                <dd><?php echo $cliente->passaporte; ?></dd>
                            </dl>
                        </div>

                        <div class="pmbb-edit">
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Full Name</dt>
                                <dd>
                                    <div class="fg-line">
                                        <input type="text" class="form-control" placeholder="eg. Mallinda Hollaway">
                                    </div>

                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Gender</dt>
                                <dd>
                                    <div class="fg-line">
                                        <select class="form-control">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Birthday</dt>
                                <dd>
                                    <div class="dtp-container dropdown fg-line">
                                        <input type='text' class="form-control date-picker" data-toggle="dropdown" placeholder="Click here...">
                                    </div>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt class="p-t-10">Martial Status</dt>
                                <dd>
                                    <div class="fg-line">
                                        <select class="form-control">
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </dd>
                            </dl>

                            <div class="m-t-30">
                                <button class="btn btn-primary btn-sm">Save</button>
                                <button data-pmb-action="reset" class="btn btn-link btn-sm">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
