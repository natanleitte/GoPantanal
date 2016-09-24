<div class="row m-b-25">
    <div class="col-xs-6">
        <div class="text-right">
            <p class="c-gray">Von</p>
            <h4>Martin Arn</h4>
            <span class="text-muted">
                <address>
                    1070, Rua Autonomista
                    Campo Grande, Mato Grosso do Sul<br>
                    Brasil
                </address>
                +55 67 3014-9449 | 9987-1191<br/>
                info@pantanal.com | pantanal@gmx.net
            </span>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="i-to">
            <p class="c-gray">Nach</p>
            <h4><?php echo $cliente->nome; ?></h4>
            <span class="text-muted">
                <address>
                    <?php echo $cliente->nacionalidade; ?>
                </address>
                <?php echo $cliente->telefone; ?><br/>
                <?php echo $cliente->email; ?>
            </span>
        </div>
    </div>
</div>