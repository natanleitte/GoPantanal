<script type="text/javascript">
    $(function () {
        //$('#datetimepicker1').datetimepicker();
        $('#datetimepicker1').datetimepicker({
            format: 'DD/MM/YYYY',
        });
    });
</script>

<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Hotel</h2>

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
                <h2>Inserir Hotel</h2>
            </div>

            <div class="card-body card-padding">
                <!--<p class="c-black f-500 m-b-5">Basic Example</p>-->
                <!--<small>Place one add-on or button on either side of an input. You may also place one on both sides of an input.</small>-->

                <br/><br/>
                <form role="form" id="formHotel">

                    <div class="row">
                        <div class="col-sm-6">                       
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                <div class="fg-line">
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
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
                        </div>

                        <div class="col-sm-6">                       
                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" id="responsavel" name="responsavel" class="form-control" placeholder="Responsável">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-account"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">
                                    <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço">
                                </div>
                                <span class="input-group-addon last"><i class="zmdi zmdi-account-calendar"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">    
                                    <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade">
                                </div>
                                <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                            </div>

                            <br/>

                        </div>                        
                    </div>
                </form>

                <br/>
                <button onclick="adicionarHotel()" class="btn btn-block btn-primary waves-effect">Salvar <i class="zmdi zmdi-mail-send"></i></button>

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function adicionarHotel()
    {
//        alert("ola");
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/hotel/inserirHotel',
            type: 'POST',
            data: $("#formHotel").serialize(),
            success: function (msg) {
                swal("Hotel inserido com sucesso!", "", "success");
                $("#nome, #email, #telefone, #responsavel, #endereco, #cidade").val('');
            }
        });
        return false;
    }
</script>