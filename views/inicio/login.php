<?php require_once('template/header.php'); ?>

    <title><?php echo NOMBRE_PROYECTO ?></title>
</head>
<br>
<?php if (isset($_GET['mensaje'])){ ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="alert <?php echo ALERTCOLORLOGIN ?> alert-dismissible"
                 style="background-color: white !important; color: black !important; border-color: white !important;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p align="center"><?php echo $_GET['mensaje']; ?></p>
            </div>
        </div>
        <div class="col-md-4"></div>



    </div>

<?php } ?>
<body class="hold-transition login-page">
<div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body" >
        <p class="login-box-msg"><b>Acceso</b></p>

        <form autocomplete="off"  action="<?php echo get_url('session','login_bd'); ?>"
              method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Usuario" name="user" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn <?php echo BTNCOLOR ?> btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo RUTA_BOOTSTRAP ?>js/jquery.min.js"></script>
<script src="<?php echo RUTA_BOOTSTRAP ?>js/popper.min.js"></script>
<script src="<?php echo RUTA_BOOTSTRAP ?>js/bootstrap.min.js"></script>
<script src="<?php echo RUTA_ADMINLTE ?>js/adminlte.min.js"></script>
</body>
</html>