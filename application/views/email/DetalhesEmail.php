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
                                     <?php echo "<b>" . $email->nomeRemetente . "</b>" . " - [" . $email->emailRemetente . "]";?>
                                    Cc: <?php echo $email->emailCC . "<br>";?>
                                    Encaminhado em <?php echo $email->dataDeEnvio; ?>
                                </small>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="card-body card-padding p-t-0">
                    <p><?php echo quoted_printable_decode($email->corpoDoEmail); ?></p>
                </div>

                <div class="wall-comment-list">

                    <!-- Comment form -->
                    <div class="wcl-form">
                        <div class="wc-comment">
                            <div class="wcc-inner wcc-toggle">
                                Write Something...
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>