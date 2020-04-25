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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Acc</b>eso</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <form autocomplete="off"  action="<?php echo get_url('session','login_bd'); ?>" method="post">
        <div class="input-group mb-3">
          <input name="user" type="text" class="form-control" placeholder="Usuario" require>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Contraseña" require>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn <?php echo BTNCOLOR ?> btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo RUTA_BOOTSTRAP ?>js/jquery.min.js"></script>
<script src="<?php echo RUTA_BOOTSTRAP ?>js/popper.min.js"></script>
<script src="<?php echo RUTA_BOOTSTRAP ?>js/bootstrap.min.js"></script>
<script src="<?php echo RUTA_ADMINLTE ?>js/adminlte.min.js"></script>
</body>
</html>