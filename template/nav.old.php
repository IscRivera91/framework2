<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">
    <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo get_url('inicio','index',SESSION_ID); ?>" class="logo">
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><?= NOMBRE_PROYECTO ?></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>


            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a><?php echo NOMBRE_USUARIO ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_url('session','login_off',SESSION_ID); ?>" >Salir <i class="fa fa-power-off"></i></a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>