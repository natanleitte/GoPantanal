<?php
   foreach ($cliente->result() as $row) {
       $cliente = $row;
   }
?>

<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Cliente</h2>

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
                <h2>Editar Cliente</h2>
            </div>

            <div class="card-body card-padding">
<!--                <p class="c-black f-500 m-b-5">Basic Example</p>
                <small>Place one add-on or button on either side of an input. You may also place one on both sides of an input.</small>-->

                <br/><br/>
                <form role="form" id="formCliente">

                    <div class="row">
                        <div class="col-sm-6">                       
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                <div class="fg-line">
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo" value="<?php echo $cliente->nome ?>">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                <div class="fg-line">
                                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Fone" value="<?php echo $cliente->telefone ?>">
                                </div>
                            </div>

                            <br/>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                <div class="fg-line">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $cliente->email ?>">
                                </div>
                            </div>

                            <br/>

                        </div>

                        <div class="col-sm-6">                       
                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" id="passaporte" name="passaporte" class="form-control" placeholder="Passaporte" value="<?php echo $cliente->passaporte ?>">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-airplane"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" class="form-control" placeholder="Idade">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-account-calendar"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">    
                                    <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" value="<?php echo $cliente->endereco ?>">
                                </div>
                                <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                            </div>
                        </div>
                        <input type="text" hidden="hidden" id="id" name="id" value="<?php echo $cliente->id ?>"/>
                    </div>
                </form>

                <br/>
                <button onclick="atualizarCliente()" class="btn btn-block btn-primary waves-effect">Salvar <i class="zmdi zmdi-mail-send"></i></button>

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function atualizarCliente()
    {
        swal({
            title: "Tem certeza que deseja realizar esta alteração?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#2196f3",
            confirmButtonText: "Sim!",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                url: '<?= base_url(); ?>' + 'index.php/cliente/atualizarCliente',
                type: 'POST',
                data: $("#formCliente").serialize(),
                success: function (msg) {
                    swal("Cliente alterado com sucesso!", "", "success");
                }
            });
        });
        return false;
    }
</script>