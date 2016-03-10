<section id="content">
    <div class="container c-alt">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="media">
                        <div class="pull-left">
                            <i class="zmdi zmdi-email-open zmdi-hc-5x"></i>
                        </div>

                        <div class="media-body m-t-5">
                            <h2>
                                <?php echo $email->assunto; ?>
                                <small>
                                    <?php echo "<b>" . $email->nomeRemetente . "</b>" . " - [" . $email->emailRemetente . "]"; ?>
                                    Cc: <?php echo $email->emailCC . "<br>"; ?>
                                    Encaminhado em <?php echo date('d/m/Y H:i:s', strtotime($email->dataDeEnvio)); ?>
                                </small>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="card-body card-padding p-t-0">
                    <p><?php echo quoted_printable_decode($email->corpoDoEmail); ?></p>
                </div>

                <div class="wall-comment-list">

                    <!-- Responder email form -->
                    <div>
                        <?php echo form_open(base_url() . 'index.php/Mail/enviar'); ?>
                            <div class="card-body card-padding">
                                <p class="f-500 c-black m-b-20">Responder</p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input id="destinatario" type="hidden" name="destinatario" value="<?php echo $email->emailRemetente; ?>">
                                        <input id="corpoDoEmail" type="hidden" name="corpoDoEmail" value="">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="zmdi zmdi-assignment"></i></span>
                                            <div class="fg-line">    
                                                <input id="assunto" type="text" class="form-control" name="assunto" placeholder=" Assunto...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="html-editor"></div>
                            </div>
                            <button id="enviarEmail" class="btn btn-default"><i class="zmdi zmdi-mail-send"></i></button>
                        <?php echo form_close(); ?>
                        <script>
                            $('#enviarEmail').on('click', function(){
                                var valorDaDiv = $(".note-editing-area").text();
                                $("#corpoDoEmail").val(valorDaDiv);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <button class="btn btn-float bgm-red m-btn" data-action="print"><i class="zmdi zmdi-print"></i></button>
        </div>
</section>