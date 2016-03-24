<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GoPantanal</title>
        
        <!-- Vendor CSS -->
        <link href="<?php echo base_url() . "assets/" ;?>vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . "assets/" ;?>vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
            
        <!-- CSS -->
        <link href="<?php echo base_url() . "assets/" ;?>css/app.min.1.css" rel="stylesheet">
        <link href="<?php echo base_url() . "assets/" ;?>css/app.min.2.css" rel="stylesheet">
    </head>
    
    <body class="login-content">
        <!-- Login -->
        <div class="lc-block toggled" id="l-login">
            <?php echo form_open(base_url() . 'index.php/login/logar'); ?>
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                <div class="fg-line">
                    <input type="text" class="form-control" name="login" placeholder="Login">
                </div>
            </div>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                <div class="fg-line">
                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
            </div>
            
            <div class="clearfix"></div>
            
            <button href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
            <?php echo form_close(); ?>
        </div>
        
        <!-- Javascript Libraries -->
        <script src="<?php echo base_url() . "assets/" ;?>vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url() . "assets/" ;?>vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="<?php echo base_url() . "assets/" ;?>vendors/bower_components/Waves/dist/waves.min.js"></script>
        
        <script src="<?php echo base_url() . "assets/" ;?>js/functions.js"></script>
        
    </body>
</html>