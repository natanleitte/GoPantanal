<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Inserir Cliente</h2>

            <ul class="actions">
                <li>
                    <a href="">
                        <i class="zmdi zmdi-trending-up"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="zmdi zmdi-check-all"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="">Refresh</a>
                        </li>
                        <li>
                            <a href="">Manage Widgets</a>
                        </li>
                        <li>
                            <a href="">Widgets Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

        <div class="card">
            <div class="card-header">
                <h2>Input Groups <small>Extend form controls by adding text or buttons before, after, or on both sides of any text-based inputs.</small></h2>
            </div>

            <div class="card-body card-padding">
                <p class="c-black f-500 m-b-5">Basic Example</p>
                <small>Place one add-on or button on either side of an input. You may also place one on both sides of an input.</small>

                <br/><br/>
                <form role="form" id="formCliente">

                    <div class="row">
                        <div class="col-sm-4">                       
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                <div class="fg-line">
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                <div class="fg-line">
                                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Fone">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                <div class="fg-line">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                <div class="fg-line">    
                                    <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">                       
                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" id="passaporte" name="passaporte" class="form-control" placeholder="Passaporte">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-airplane"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Idade">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-sun"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Flight">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-airplane"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">    
                                    <input type="text" class="form-control" placeholder="Location">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-my-location"></i></span>
                            </div>
                        </div>

                        <div class="col-sm-4">                       
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-arrow-missed"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Internet">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-globe"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Notifications">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-plus-circle-o"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Layers">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-layers "></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-portable-wifi"></i></span>
                                <div class="fg-line">    
                                    <input type="text" class="form-control" placeholder="Messages">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-dialpad"></i></span>
                            </div>
                        </div>
                    </div>
                </form>
                
                <br/>
                <button onclick="adicionarCliente()" class="btn btn-block btn-primary waves-effect">Enviar <i class="zmdi zmdi-mail-send"></i></button>

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function adicionarCliente()
    {
//        alert("ola");
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/cliente/inserirCliente',
            type: 'POST',
            data: $("#formCliente").serialize(),
            success: function (msg) {
                swal("Cliente inserido com sucesso!", "", "success");
                $("#nome, #email, #telefone, #endereco, #passaporte").val('');
            }
        });
        return false;
    }
</script>