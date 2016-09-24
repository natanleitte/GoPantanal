<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });
</script>

<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Cliente</h2>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Inserir Cliente</h2>
            </div>

            <div class="card-body card-padding">
                <!--<p class="c-black f-500 m-b-5">Basic Example</p>-->
                <!--<small>Place one add-on or button on either side of an input. You may also place one on both sides of an input.</small>-->

                <br/><br/>
                <form role="form" id="formCliente">

                    <div class="row">
                        <div class="col-sm-6">                       
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
                                <span class="input-group-addon"><i class="zmdi zmdi-assignment-alert"></i></span>
                                <div class="fg-line">    
                                    <textarea id="observacao" name="observacao" class="form-control" placeholder="Observação"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6">                       
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
                                <span class="input-group-addon last"><i class="zmdi zmdi-account-calendar"></i></span>
                            </div>

                            <br/>

                            <div class="input-group">
                                <div class="fg-line">    
                                    <input type="text" id="nacionalidade" name="nacionalidade" class="form-control" placeholder="Nacionalidade">
                                </div>
                                <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                            </div>

                            <br/>

                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" name="data_contato" placeholder="Data do Contato" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>

                            <br/>

                            <div class="form-group">
                                <div class="fg-line">
                                    <div class="select">
                                        <select name="origem_contato" class="form-control" placeholder="Origem do Contato">
                                            <option value="">Origem do contato...</option>
                                            <option value="Email">Email</option>
                                            <option value="Telefone">Telefone</option>
                                            <option value="Site">Site</option>
                                            <option value="Pessoal">Pessoal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </form>

                <br/>
                <button onclick="adicionarCliente()" class="btn btn-block btn-primary waves-effect">Salvar <i class="zmdi zmdi-mail-send"></i></button>

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function adicionarCliente()
    {
        $.ajax({
            url: '<?= base_url(); ?>' + 'index.php/cliente/inserirCliente',
            type: 'POST',
            data: $("#formCliente").serialize(),
            success: function (msg) {
                swal("Cliente inserido com sucesso!", "", "success");
                $("#nome, #email, #telefone, #nacionalidade, #passaporte, #observacao, #data_contato").val('');
            }
        });
        return false;
    }
</script>