<section id="content">
    <div class="container c-alt">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="media">
                        <div class="status-do-envio">
                            <?php
                            if($statusEnvio === 1){
                                echo "<div class='alert alert-info alert-dismissible' role='alert'>" .
                                        "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" .
                                        "Encaminhado com sucesso!" .
                                    "</div>";
                            }else if($statusEnvio === 0){
                                echo "<div class='alert alert-danger alert-dismissible' role='alert'>" .
                                        "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" .
                                        "Oops! ocorreu algum problema ao encaminhar" .
                                    "</div>";
                            }
                            ?>
                        </div>

                        <div class="pull-left">
                            <i class="zmdi zmdi-email-open zmdi-hc-5x"></i>
                        </div>

                        <div class="media-body m-t-5">
                            <h2>
                                <?php echo $email->assunto; ?>
                                <small>
                                    <?php echo "De: <b>" . $email->nomeRemetente . "</b>" . " - ( " . $email->emailRemetente . " )<br>"; ?>
                                    <?php echo "Cc: <b>" . $email->emailCC . "</b><br>"; ?>
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
                        <?php echo form_open(base_url() . 'index.php/Mail/enviar?id=' . $email->idDoEmailNoServidor); ?>
                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input id="destinatario" type="hidden" name="destinatario" value="<?php echo $email->emailRemetente; ?>">
                                    <input id="corpoDoEmail" type="hidden" name="corpoDoEmail" value="">
                                </div>
                            </div>
                            <blockquote class="m-b-25">
                                <p>Responder</p>
                            </blockquote>
                            <div class="html-editor"></div>
                        </div>
                        <button id="enviarEmail" class="btn bgm-blue btn-float waves-effect"><i class="zmdi zmdi-mail-send"></i></button>
                        <?php echo form_close(); ?>
                        <script>
                            $('#enviarEmail').on('click', function() {
                                var conteudoDaDiv = $(".note-editable").html();
                                $("#corpoDoEmail").val(conteudoDaDiv);
                            });</script>
                    </div>
                </div>
            </div>
            <button class="btn btn-float bgm-red m-btn" data-action="print"><i class="zmdi zmdi-print"></i></button>
        </div>
</section>
<script>
    $(document).ready(
            $.urlParam = function(name) {
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                return results[1] || 0;
            };
            
            if ($.urlParam('statusEnvio') === 1) {
                $('.js-container-de-alertas').hasClass('alert-info').show();
            }else{
                $('.js-container-de-alertas').hasClass('alert-info').hidden();
            }
            
            if ($.urlParam('statusEnvio') === 0) {
                $('.js-container-de-alertas').hasClass('alert-danger').show();
                }else{
                    $('.js-container-de-alertas').hasClass('alert-danger').hidden();
                }
    );
</script>